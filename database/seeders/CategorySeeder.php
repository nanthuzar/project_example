<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('fountation', 'decoration');

        $now = Carbon::now();
        foreach ($categories as $category){
        	DB::table('categories')->insert([
        		'name' => $category,
        		'created_at' => $now,
        		'updated_at' => $now,
        	]);
        }
    }
}
