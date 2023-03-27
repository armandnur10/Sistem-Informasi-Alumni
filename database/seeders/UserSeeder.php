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
            $user->name = 'admin';
            $user->email = 'admin@gmail.com';
            $user->password = \Hash::make('admin');
            $user->level = 'admin';
            $user->remember_token = Str::random(60);
            $user->nisn = '-';
            $user->photo = 'admin.jpg';
            $user->angkatan = '0';
            $user->alamat = '-';
            $user->save();
    }
}
