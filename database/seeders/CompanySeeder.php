<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Post;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            [
                'title' => 'Professional Makeup Artist',
                'employment' => 'Full Time',
            ],
        ];
        //user id is 2 that has author role
        $company = Company::factory()->create([
            'company_category_id' => 1,
            'title' => 'Inazuma Wedding Organizer',
            'logo' => 'images/logo/inazuma.jpg',
        ]);
        foreach ($details as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $company->id,
                'job_title' => $detail['title'],
                'employment_type' => $detail['employment'],
            ]);
        }
    }
}
