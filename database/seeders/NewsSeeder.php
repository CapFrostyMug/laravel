<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $faker = \Faker\Factory::create('ru_RU');
        $data = [];

        for ($i = 0; $i <= 10; $i++) {
            $data[] = [
                'category_id' => rand(1,5),
                'title' => $faker->sentence(rand(5,10)),
                'text' => $faker->text(rand(200,300)),
                'is_private' => rand(0,1)
            ];
        }

        return $data;
    }
}
