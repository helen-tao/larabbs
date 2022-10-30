<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $sentence = $this->faker->sentence();
        return [
            'title' => $sentence,
            'excerpt' => $sentence,
            'body' => $this->faker->text(),
            'user_id' => rand(1,10),
            'category_id' => rand(1,4),
        ];
    }
}
