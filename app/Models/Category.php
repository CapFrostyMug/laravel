<?php


namespace App\Models;


use Illuminate\Support\Facades\Storage;

class Category
{
    /*private array $newsCategories = [
        [
            'id' => 1,
            'name' => 'Спорт',
            'slug' => 'sport',
        ],
        [
            'id' => 2,
            'name' => 'Авто',
            'slug' => 'auto',
        ],
        [
            'id' => 3,
            'name' => 'Кино',
            'slug' => 'movie',

        ],
        [
            'id' => 4,
            'name' => 'Игры',
            'slug' => 'games',
        ],
        [
            'id' => 5,
            'name' => 'Здоровье',
            'slug' => 'health',
        ],
    ];*/

    public function getNewsCategories(): array
    {
        return json_decode(Storage::disk('local')->get('categories.json'), true);
        //return $this->newsCategories;
    }

    public function getCategoryIdBySlug($slug)
    {
        $id = null;

        foreach ($this->getNewsCategories() as $category) {
            if ($category['slug'] == $slug) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }
}
