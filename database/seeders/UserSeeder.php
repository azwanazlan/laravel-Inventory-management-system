<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'azwan',
                'email' => 'azwanazlan2809@gmail.com',
                'username' => "azwan93",
                'password' => '$2y$10$oic/5X.G1py8F6kHeNs8CuWXLCAwQb/AaG1z/HeLmyHLmWM0A/raC',
                'email_verified_at' => '2022-09-05 14:02:27'
            ],

        ];


        foreach ($users as $user)
        {
            User::create($user);
        }
    }
}
