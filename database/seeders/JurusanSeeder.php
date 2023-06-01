<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('jurusan')->insert([

                [
                    'id' => '1',
                    'nama_jurusan' => 'Teknik Komputer dan Jaringan',
                ],

                [
                    'id' => '2',
                    'nama_jurusan' => 'Akuntansi Komputer',
                ],

                [
                    'id' => '3',
                    'nama_jurusan' => 'Farmasi Kesehatan',
                ],

                [
                    'id' => '4',
                    'nama_jurusan' => 'Teknik Laboratorium Medik',
                ],
                

            ]);
    }
}
