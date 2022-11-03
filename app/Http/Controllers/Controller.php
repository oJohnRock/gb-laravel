<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private static $categories = [
        [
            'id' => 1,
            'name' => 'Спорт',
        ],
        [
            'id' => 2,
            'name' => 'Кино',
        ],
        [
            'id' => 3,
            'name' => 'Музыка',
        ],
        [
            'id' => 4,
            'name' => 'Видеоигры',
        ],
        [
            'id' => 5,
            'name' => 'Политика',
        ],
    ];

    private static $news = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Новости Спорта 1',
            'category_id' => 1,
        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Новости Спорта 2',
            'category_id' => 1,
        ],
        [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Новости Спорта 3',
            'category_id' => 1,
        ],
        [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'Новости Спорта 4',
            'category_id' => 1,
        ],
        [
            'id' => 5,
            'title' => 'Новость 5',
            'text' => 'Новости Кино 1',
            'category_id' => 2,
        ],
        [
            'id' => 6,
            'title' => 'Новость 6',
            'text' => 'Новости Кино 2',
            'category_id' => 2,
        ],
        [
            'id' => 7,
            'title' => 'Новость 7',
            'text' => 'Новости Кино 3',
            'category_id' => 2,
        ],
        [
            'id' => 8,
            'title' => 'Новость 8',
            'text' => 'Новости Кино 4',
            'category_id' => 2,
        ],
        [
            'id' => 9,
            'title' => 'Новость 9',
            'text' => 'Новости Музыки 1',
            'category_id' => 3,
        ],
        [
            'id' => 10,
            'title' => 'Новость 10',
            'text' => 'Новости Музыки 2',
            'category_id' => 3,
        ],
        [
            'id' => 11,
            'title' => 'Новость 11',
            'text' => 'Новости Музыки 3',
            'category_id' => 3,
        ],
        [
            'id' => 12,
            'title' => 'Новость 12',
            'text' => 'Новости Музыки 4',
            'category_id' => 3,
        ],
        [
            'id' => 13,
            'title' => 'Новость 13',
            'text' => 'Новости Видеоигр 1',
            'category_id' => 4,
        ],
        [
            'id' => 14,
            'title' => 'Новость 14',
            'text' => 'Новости Видеоигр 2',
            'category_id' => 4,
        ],
        [
            'id' => 15,
            'title' => 'Новость 15',
            'text' => 'Новости Видеоигр 3',
            'category_id' => 4,
        ],
        [
            'id' => 16,
            'title' => 'Новость 16',
            'text' => 'Новости Видеоигр 4',
            'category_id' => 4,
        ],
        [
            'id' => 17,
            'title' => 'Новость 17',
            'text' => 'Новости Политики 1',
            'category_id' => 5,
        ],
        [
            'id' => 18,
            'title' => 'Новость 18',
            'text' => 'Новости Политики 2',
            'category_id' => 5,
        ],
        [
            'id' => 19,
            'title' => 'Новость 19',
            'text' => 'Новости Политики 3',
            'category_id' => 5,
        ],
        [
            'id' => 20,
            'title' => 'Новость 20',
            'text' => 'Новости Политики 4',
            'category_id' => 5,
        ],
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsById($id)
    {
        if ($id > count(static::$news)) return view('404');

        foreach (static::$news as $item) {
            if ($item['id'] == $id) return $item;
        }
    }

    public static function getNewsByCategoryId($id)
    {
        $categoryId = static::getCategoryById($id)['id'];
        $news = [];

        foreach (static::$news as $item) {
            if ($item['category_id'] == $categoryId) $news[] = $item;
        }

        return $news;
    }

    public static function getCategories()
    {
        return static::$categories;
    }

    public static function getCategoryById($id)
    {
        if ($id > count(static::$categories)) return view('404');

        foreach (static::$categories as $item) {
            if ($item['id'] == $id) return $item;
        }
    }
}
