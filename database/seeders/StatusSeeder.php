<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert($data =   
        [
            'id'=> '1',
            'user_id'=> '1',
            'status'=> 'Approved',
        ]);
    }
}
