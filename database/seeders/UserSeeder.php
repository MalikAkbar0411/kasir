<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            // [
            //     'name' => 'Admin',
            //     'email' => 'admin3@gmail.com',
            //     'role' => 'admin',
            //     'password' => bcrypt('12108602')
            // ],
            // [
            //     'name' => 'Kasir',
            //     'email' => 'kasir2@gmail.com',
            //     'role' => 'petugas',
            //     'password' => bcrypt('1234')
            // ],
            [
                'name' => 'abay',
                'email' => 'abay2@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12346')
                
            ],
        ];

        foreach($userData as $key => $value) {
            User::create($value);
        }
    }
}
