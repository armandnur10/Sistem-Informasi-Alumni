<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            $user = new\App\Models\User();
            $user->nama = 'admin';
            $user->username = 'admin';
            $user->nisn = 'admin';
            $user->email = 'admin@gmail.com';
            $user->level = 'admin';
            $user->remember_token = Str::random(60);
            $user->angkatan = '0';
            $user->alamat = '-';
            $user->save();
    }
}
