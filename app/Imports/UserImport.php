<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Jurusan;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

   

    public function model(array $row)
    {
        
        $row['id_jurusan'] = Jurusan::where('nama_jurusan', 'like', '%'.$row['id_jurusan'].'%')->first()->id;

        return new user([
            'name' => $row['name'],
            'id_jurusan' => $row['id_jurusan'],
            'email' => $row['email'],
            'password' => $row['password'],
            'nisn' => $row['nisn'],
            'angkatan' => $row['angkatan'],
            'alamat' => $row['alamat'],
            'status' => $row['status'],
            'jenis kelamin' => $row['jenis_kelamin'],
        ]);

        
    }
}
