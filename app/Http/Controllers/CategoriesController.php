<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Controller::getCategories();
        return view('categories.index')->with('categories', $categories);
    }

    public function newsByCategoryId($id)
    {
        $category = static::getCategoryById($id);
        $news = Controller::getNewsByCategoryId($id);

        return view('categories.category')->with('category', $category)->with('news', $news);
    }
}
