<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $faker = \Faker\Factory::create();

        $admin = new User;
        $admin->name = $faker->name($gender = 'null'|'male'|'female');
        $admin->email = 'admin@gmail.com';
        $admin->phone = $faker->randomNumber(5, true);
        $admin->address = $faker->address();
        $admin->password = Hash::make('123456789');
        $admin->created_at = $now;
        $admin->updated_at = $now;
        $admin->save();
        $admin->assignRole('admin');


        $carpenter = new User;
        $carpenter->name = $faker->name($gender = 'null'|'male'|'female');
        $carpenter->email = 'carpenter@gmail.com';
        $carpenter->phone = $faker->randomNumber(5, true);
        $carpenter->address = $faker->address();
        $carpenter->password = Hash::make('987654321');
        $carpenter->created_at = $now;
        $carpenter->updated_at = $now;
        $carpenter->save();
        $carpenter->assignRole('carpenter');


        $customer = new User;
        $customer->name = $faker->name($gender = 'null'|'male'|'female');
        $customer->email = 'customer@gmail.com';
        $customer->phone = $faker->randomNumber(5, true);
        $customer->address = $faker->address();
        $customer->password = Hash::make('123987654');
        $customer->created_at = $now;
        $customer->updated_at = $now;
        $customer->save();
        $customer->assignRole('customer');


        
    }
}
