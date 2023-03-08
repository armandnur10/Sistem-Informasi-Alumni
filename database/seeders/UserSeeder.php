<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'level'=> 'admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('admin123'),
            'remember_token' => Str::random(60)

        ]);
    }
}
