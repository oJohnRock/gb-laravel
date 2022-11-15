<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    private static $news = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Хорошая новость',
        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Плохая новость',
        ],
        [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Нормальная новость',
        ],
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }

        return null;
    }
}
