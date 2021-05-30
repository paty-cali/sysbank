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
        new RolesSeeder();
        $this->call([
            RolesSeeder::class,
            DashboardsSeeder::class,
        ]);
    }
}
