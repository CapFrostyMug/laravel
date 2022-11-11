<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsResourcesSeeder extends Seeder
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
        DB::table('news_resources')->insert([
            'id' => 1,
            'category_id' => '1',
            'url' => 'https://news.rambler.ru/rss/holiday'
        ]);

        DB::table('news_resources')->insert([
            'id' => 2,
            'category_id' => '2',
            'url' => 'https://news.rambler.ru/rss/technology'
        ]);

        DB::table('news_resources')->insert([
            'id' => 3,
            'category_id' => '3',
            'url' => 'https://news.rambler.ru/rss/gifts'
        ]);

        DB::table('news_resources')->insert([
            'id' => 4,
            'category_id' => '4',
            'url' => 'https://news.rambler.ru/rss/world'
        ]);

        DB::table('news_resources')->insert([
            'id' => 5,
            'category_id' => '5',
            'url' => 'https://news.rambler.ru/rss/moscow_city'
        ]);

        DB::table('news_resources')->insert([
            'id' => 6,
            'category_id' => '6',
            'url' => 'https://news.rambler.ru/rss/politics'
        ]);

        DB::table('news_resources')->insert([
            'id' => 7,
            'category_id' => '7',
            'url' => 'https://news.rambler.ru/rss/community'
        ]);

        DB::table('news_resources')->insert([
            'id' => 8,
            'category_id' => '8',
            'url' => 'https://news.rambler.ru/rss/incidents'
        ]);

        DB::table('news_resources')->insert([
            'id' => 9,
            'category_id' => '9',
            'url' => 'https://news.rambler.ru/rss/tech'
        ]);

        DB::table('news_resources')->insert([
            'id' => 10,
            'category_id' => '10',
            'url' => 'https://news.rambler.ru/rss/starlife'
        ]);

        DB::table('news_resources')->insert([
            'id' => 11,
            'category_id' => '11',
            'url' => 'https://news.rambler.ru/rss/army'
        ]);

        DB::table('news_resources')->insert([
            'id' => 12,
            'category_id' => '12',
            'url' => 'https://news.rambler.ru/rss/games'
        ]);

        DB::table('news_resources')->insert([
            'id' => 13,
            'category_id' => '13',
            'url' => 'https://news.rambler.ru/rss/articles'
        ]);

        DB::table('news_resources')->insert([
            'id' => 14,
            'category_id' => '14',
            'url' => 'https://news.rambler.ru/rss/video'
        ]);

        DB::table('news_resources')->insert([
            'id' => 15,
            'category_id' => '15',
            'url' => 'https://news.rambler.ru/rss/photo'
        ]);

        DB::table('news_resources')->insert([
            'id' => 16,
            'category_id' => '16',
            'url' => 'https://news.rambler.ru/rss/podcast'
        ]);
    }
}
