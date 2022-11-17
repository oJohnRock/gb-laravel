<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news, Category $category)
    {
        return view('news.index')
            ->with('news', $news->getNews())
            ->with('categories', $category->getCategories());;
    }

    public function show($id, News $news)
    {
        return view('news.one')->with('news', $news->getNewsById($id));
    }
}
