<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,10)),
            'slug' => $this->faker->slug(),
            'excerpt'=> $this->faker->paragraph(1),
            'body'=> collect($this->faker->paragraphs(mt_rand(4,12)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,4)
        ];
    }
}
