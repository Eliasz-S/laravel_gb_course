<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'newsList' => $this->getNews(),
            'categoriesList' => $this->getCategories()
        ]);
    }

    public function show(int $id)
    {
        return "Новость с ID={$id}";
    }
}
