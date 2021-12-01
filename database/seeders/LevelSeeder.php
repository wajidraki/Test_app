<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [ '8th', '9th', '10th' ];
        foreach ( $levels as $lev ) {
            $levels = new Level();
            $levels->name = $lev;

            $levels->save();
        }
    }}
