<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::insert([
            [
                'name' => "jacky Yadav",
                'email' => 'jackyyadav7565@gmail.com',
                'password' =>bcrypt('admin123'),
                'image'=>'default.png'
            ],
            [
                'name' => "sohan Yadav",
                'email' => 'sohan@gmail.com',
                'password' => bcrypt('admin123'),
                'image'=>'default.png'
            ]
        ]);

        User::factory()->count(5)->create();
    }
}
