<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\LevelController;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentSeeder::class);
        $this->call(LevelSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
