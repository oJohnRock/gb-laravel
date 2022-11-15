<?php

namespace App\Models;

class Category
{
    private array $categories = [
        1 => [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport',
        ],
        2 => [
            'id' => 2,
            'title' => 'Кино',
            'slug' => 'movies'
        ],
        3 => [
            'id' => 3,
            'title' => 'Музыка',
            'slug' => 'music',
        ],
        4 => [
            'id' => 4,
            'title' => 'Видеоигры',
            'slug' => 'games',
        ],
        5 => [
            'id' => 5,
            'title' => 'Политика',
            'slug' => 'politics',
        ],
    ];

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategoryById($id)
    {
        if (array_key_exists($id, $this->getCategories())) {
            return $this->getCategories()[$id];
        } else {
            return null;
        }
    }

    public function getCategoryIdBySlug($slug)
    {
        $id = null;

        foreach ($this->getCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];

                break;
            }
        }

        return $id;
    }

    public function getCategoryNameBySlug($slug)
    {
        $id = $this->getCategoryIdBySlug($slug);
        $category = $this->getCategoryById($id);

        if (!empty($category)) {
            return $category['title'];
        } else {
            return null;
        }
    }
}
