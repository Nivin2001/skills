<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        role::create([
            'name'=>'super_admin',
        ]);

        role::create([
            'name'=>'admin',
        ]);

        role::create([
            'name'=>'student',
        ]);
    }
}
