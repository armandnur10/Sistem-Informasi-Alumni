<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

   

    public function model(array $row)
    {
        
        $row['jurusan'] = Jurusan::where('nama_jurusan', 'like', '%'.$row['jurusan'].'%')->first()->id;

        return new user([
            'nama' => $row['nama'],
            'jurusan' => $row['jurusan'],
            'email' => $row['email'],
            'nisn' => $row['nisn'],
            'no_hp' => $row['no_hp'],
            'angkatan' => $row['angkatan'],
            'alamat' => $row['alamat'],
            'status' => $row['status'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'status_pernikahan' => $row['status_pernikahan'],
            'tempat_kerja' => $row['tempat_kerja'],
            'tempat_kuliah' => $row['tempat_kuliah'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir'])->format('Y-m-d'),
            'nama_ayah' => $row['nama_ayah'],
            'nama_ibu' => $row['nama_ibu'],
            'pekerjaan_ayah' => $row['pekerjaan_ayah'],
            'pekerjaan_ibu' => $row['pekerjaan_ibu'],

        ]);


        
    }
    public function rules(): array
    {
        return [
            'tanggal_lahir' => 'date_format:d/m/Y',
        ];
    }
}