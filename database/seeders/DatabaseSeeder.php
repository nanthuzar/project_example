<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(CategorySeeder::class);
        // $this->call(ShippingSeeder::class);
        //$this->call(TownshipSeeder::class);
        //$this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
