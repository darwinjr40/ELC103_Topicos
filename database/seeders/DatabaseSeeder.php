<?php

namespace Database\Seeders;
// namespace Database\Seeders\otros;

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
        $this->call(PersonSeeder::class);
        

    }
}
