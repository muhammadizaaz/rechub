<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_title' => 'Chef',
            'vacancy_count' => rand(2, 10), // password
            'employment_type' => 'Full time',
            'veneu' => 'Inazuma city',
            'deadline' => date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s") . " +2 days")),
            'experience' => '1 years',
            'salary' => '20k',
            'skills' => 'Teamwork, Cooking',
            'specifications' => '<p></p>',
        ];
    }
}
