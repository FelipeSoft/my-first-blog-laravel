<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->text(30),
            'subtitle' => $this->faker->text(300),
            'body' => $this->faker->text(2000),
            'user_id' => User::all()->random(),
        ];
    }
}
