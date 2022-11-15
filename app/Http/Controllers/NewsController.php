<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = Controller::getNews();
        return view('news.index')->with('news', $news);
    }

    public function newsOne($id)
    {
        $news = Controller::getNewsById($id);

        return view('news.newsOne')->with('newsOne', $news);
    }

    public function newsAdd()
    {
        return view('home');
    }
}
