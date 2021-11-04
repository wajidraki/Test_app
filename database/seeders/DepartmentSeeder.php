<?php

namespace Database\Seeders;

use App\Models\Instituation;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institions = ['computer sciecne','physcics','chemistry'];
        foreach ($institions as $instit){
        $instite =  new Instituation();
        $instite->name = $instit;

        $instite->save();

    }

    }
}
