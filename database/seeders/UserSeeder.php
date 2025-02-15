<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Kevin', 'email' => 'kevin@gmail.com', 'password' => bcrypt('kevin123')],
            ['name' => 'Kevin A', 'keandre@gmail.com', 'password' => bcrypt('kevin13')],
            ['name' => 'Kevin B', 'keandreas@gmail.com', 'password' => bcrypt('kevin3')],
        ];
        \App\Models\User::insert($data);
    }
}
