<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSources extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sources')->insert($this->getData());
    }

    private function getData()
    {
        $faker = \Faker\Factory::create('ru_RU');
        $data = [];

        for ($i = 0; $i <= 5; $i++) {
            $data[] = [
                'name' => $faker->sentence(rand(5,7)),
                'url' => $faker->text(rand(150,250))
            ];
        }

        return $data;
    }
}
