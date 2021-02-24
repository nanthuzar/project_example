<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $statuses = array('Order Received', 'Proceeding', 'Order Finished');
        $now = Carbon::now();

        foreach ($statuses as $status) {
        	DB::table('statuses')->insert([
	            'name' => $status,
	            'created_at' => $now,
	            'updated_at' => $now,
	        ]);
        }
    }
}
