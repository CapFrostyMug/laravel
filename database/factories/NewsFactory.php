<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ru_RU');

        return [
            'category_id' => rand(1,5),
            'title' => $faker->sentence(rand(5,10)),
            'text' => $faker->text(rand(200,300)),
            'is_private' => rand(0,1)
        ];
    }
}
