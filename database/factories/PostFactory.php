<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        $created_At = $this->faker->dateTimeBetween('-3 months', '-2 months');

        return [
            'user_id' => User::get()->random()->id,
            'category_id' => Category::get()->random()->id,
            'title' => $this->faker->word,
            'content' => $this->faker->realtext(rand(100,200)),
            'is_published' => rand(1, 5) > 5,
            'created_at'    => $created_At,
            'updated_at'    => $created_At,

        ];
    }
}
