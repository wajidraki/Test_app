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


        $institions = [
            [
                'name'=>'alama iqbal Uni',
                'email'=>'alama@gmail.com',
                'address'=>'Gilgit'

            ],
            [
                'name'=>'urdu University',
                'email'=>'urdu@gmail.com',
                'address'=>'Gilgit'
            ],
            [
                'name'=>'Karakoram international Universtiy',
                'email'=>'kiu@gmail.com',
                'address'=>'Gilgit'
            ]
        ];

        foreach ($institions as $instit){
        $instite =  new Instituation();
        $instite->name = $instit['name'];
        $instite->phone = $instit['email'];
        $instite->address = $instit['address'];
        $instite->save();

    }

    }
}
