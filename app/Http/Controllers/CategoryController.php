<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() // вывод всех категорий списком
    {
        $categoryModel = new Category();

        $categories = $categoryModel->getCategories();
        
        return view('categories.index', [
            'categoryList' => $categories
        ]);
    }

    public function filter(int $id) // вывод всех новостей в конкретной категории
    {
        $categoryModel = new Category();

        $category = $categoryModel->getCategoryById($id);

        $newsModel = new News();

        $news = $newsModel->getNews();

        return view('categories.filter', [
            'id' => $id,
            'category' => $category,
            'newsList' => $news
        ]);
    }
}
