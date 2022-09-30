<?php


namespace App\Models;


class Categories
{
    private static $categories = [
        [
            'id' => 1,
            'name' => 'Спорт'
        ],
        [
            'id' => 2,
            'name' => 'Авто'
        ],
        [
            'id' => 3,
            'name' => 'Кино'
        ],
        [
            'id' => 4,
            'name' => 'Игры'
        ],
        [
            'id' => 5,
            'name' => 'Здоровье'
        ],
    ];

    public static function getCategories()
    {
        return static::$categories;
    }
}
