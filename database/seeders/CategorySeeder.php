<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Wedding Organizer',
            'Event Organizer',
        ];
        foreach ($categories as $category) {
            DB::table('company_categories')->insert([
                'category_name' => $category
            ]);
        }
    }
}
