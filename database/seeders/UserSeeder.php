<?php

namespace Database\Seeders;
use App\models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        User::create([
            'name'=>'nivin',
            'email'=>'nivin@gmail.com',
            'password'=>('123')

        ]);
    }
}
