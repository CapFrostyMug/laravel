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
            'name' => 'Спорт',
            'slug' => 'sport'
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Авто',
            'slug' => 'auto'
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Кино',
            'slug' => 'movie'
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Игры',
            'slug' => 'games'
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Здоровье',
            'slug' => 'health'
        ]);
    }
}
