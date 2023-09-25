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
            'name'=>'aya  ',
            'email'=>'aya@gmail.com',
            'password' =>123,
            'role_id' =>3

        ]);
    }
}
