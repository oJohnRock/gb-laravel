<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    private Category $category;

    private array $news = [
        1 => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Новости Спорта 1',
            'category_id' => 1,
            'is_private' => true,
        ],
        2 => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Новости Спорта 2',
            'category_id' => 1,
            'is_private' => true,
        ],
        3 => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'Новости Спорта 3',
            'category_id' => 1,
            'is_private' => false,
        ],
        4 => [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'Новости Спорта 4',
            'category_id' => 1,
            'is_private' => false,
        ],
        5 => [
            'id' => 5,
            'title' => 'Новость 5',
            'text' => 'Новости Кино 1',
            'category_id' => 2,
            'is_private' => false,
        ],
        6 => [
            'id' => 6,
            'title' => 'Новость 6',
            'text' => 'Новости Кино 2',
            'category_id' => 2,
            'is_private' => true,
        ],
        7 => [
            'id' => 7,
            'title' => 'Новость 7',
            'text' => 'Новости Кино 3',
            'category_id' => 2,
            'is_private' => true,
        ],
        8 => [
            'id' => 8,
            'title' => 'Новость 8',
            'text' => 'Новости Кино 4',
            'category_id' => 2,
            'is_private' => false,
        ],
        9 => [
            'id' => 9,
            'title' => 'Новость 9',
            'text' => 'Новости Музыки 1',
            'category_id' => 3,
            'is_private' => false,
        ],
        10 => [
            'id' => 10,
            'title' => 'Новость 10',
            'text' => 'Новости Музыки 2',
            'category_id' => 3,
            'is_private' => false,
        ],
        11 => [
            'id' => 11,
            'title' => 'Новость 11',
            'text' => 'Новости Музыки 3',
            'category_id' => 3,
            'is_private' => true,
        ],
        12 => [
            'id' => 12,
            'title' => 'Новость 12',
            'text' => 'Новости Музыки 4',
            'category_id' => 3,
            'is_private' => true,
        ],
        13 => [
            'id' => 13,
            'title' => 'Новость 13',
            'text' => 'Новости Видеоигр 1',
            'category_id' => 4,
            'is_private' => true,
        ],
        14 => [
            'id' => 14,
            'title' => 'Новость 14',
            'text' => 'Новости Видеоигр 2',
            'category_id' => 4,
            'is_private' => false,
        ],
        15 => [
            'id' => 15,
            'title' => 'Новость 15',
            'text' => 'Новости Видеоигр 3',
            'category_id' => 4,
            'is_private' => true,
        ],
        16 => [
            'id' => 16,
            'title' => 'Новость 16',
            'text' => 'Новости Видеоигр 4',
            'category_id' => 4,
            'is_private' => false,
        ],
        17 => [
            'id' => 17,
            'title' => 'Новость 17',
            'text' => 'Новости Политики 1',
            'category_id' => 5,
            'is_private' => false,
        ],
        18 => [
            'id' => 18,
            'title' => 'Новость 18',
            'text' => 'Новости Политики 2',
            'category_id' => 5,
            'is_private' => true,
        ],
        19 => [
            'id' => 19,
            'title' => 'Новость 19',
            'text' => 'Новости Политики 3',
            'category_id' => 5,
            'is_private' => false,
        ],
        20 => [
            'id' => 20,
            'title' => 'Новость 20',
            'text' => 'Новости Политики 4',
            'category_id' => 5,
            'is_private' => true,
        ],
    ];

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getNews()
    {
        return $this->news;
    }

    public function getNewsById($id)
    {
        if (array_key_exists($id, $this->getNews())) {
            return $this->getNews()[$id];
        }

        return null;
    }

    public function getNewsByCategorySlug($slug)
    {
        $categoryId = $this->category->getCategoryIdBySlug($slug);
        $news = [];

        foreach ($this->getNews() as $item) {
            if ($categoryId == $item['category_id']) {
                $news[$item['id']] = $item;
            }
        }

        return $news;
    }
}
