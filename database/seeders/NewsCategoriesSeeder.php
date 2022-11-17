<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->getData();
    }

    private function getData()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Праздники',
            'slug' => 'holiday'
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Техника',
            'slug' => 'technology'
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Подарки',
            'slug' => 'gifts'
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'В мире',
            'slug' => 'world'
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Новости Москвы',
            'slug' => 'moscow_city'
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Политика',
            'slug' => 'politics'
        ]);

        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'Общество',
            'slug' => 'community'
        ]);

        DB::table('categories')->insert([
            'id' => 8,
            'name' => 'Происшествия',
            'slug' => 'incidents'
        ]);

        DB::table('categories')->insert([
            'id' => 9,
            'name' => 'Наука и техника',
            'slug' => 'tech'
        ]);

        DB::table('categories')->insert([
            'id' => 10,
            'name' => 'Шоу-бизнес',
            'slug' => 'starlife'
        ]);

        DB::table('categories')->insert([
            'id' => 11,
            'name' => 'Армия',
            'slug' => 'army'
        ]);

        DB::table('categories')->insert([
            'id' => 12,
            'name' => 'Игры',
            'slug' => 'games'
        ]);

        DB::table('categories')->insert([
            'id' => 13,
            'name' => 'Статьи',
            'slug' => 'articles'
        ]);

        DB::table('categories')->insert([
            'id' => 14,
            'name' => 'Видео',
            'slug' => 'video'
        ]);

        DB::table('categories')->insert([
            'id' => 15,
            'name' => 'Фото',
            'slug' => 'photo'
        ]);

        DB::table('categories')->insert([
            'id' => 16,
            'name' => 'Подкасты',
            'slug' => 'podcast'
        ]);
    }
}
