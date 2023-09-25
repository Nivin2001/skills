<?php

namespace Database\Seeders;

use App\Models\setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Remove extra spaces and colons from column names and values
        Setting::create([
            'email' => 'contact@skill.com',
            'phone' => '059875658',
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'instagram' => 'https://www.instagram.com',
            'linkedin' => 'https://www.linkedin.com',
        ]);
    }

}
