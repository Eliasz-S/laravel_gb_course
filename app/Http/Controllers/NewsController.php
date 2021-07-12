<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsModel = new News();

        $news = $newsModel->getNews();

        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id)
    {
        $newsModel = new News();

        $news = $newsModel->getNewsById($id);

        return view('news.show', [
            'news' => $news
        ]);

    }
}
