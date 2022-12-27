<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 4, //default author by user seeder class
            'company_category_id' => 1,
            'logo' => 'images/companies/logos/',
            'title' => 'Professional Makeup Artist',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            'website' => 'https://www.inazuma-wo.com',
            'cover_img' => 'nocover',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
    }
}
