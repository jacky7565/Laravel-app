<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
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

        Contact::factory()->count(5)->create();
    }
}
