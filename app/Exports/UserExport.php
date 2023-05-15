<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserExport implements  FromView,ShouldAutoSize
{

    public function view(): View
    {
        $user = User::all();
        foreach ($user as $row) {
            $row->tangga_lahir = date('d/m/Y', strtotime($row->tanggal_lahir));
        }

        return view('widget.cetak_excel', [
            'user' => $user
        ]);
    }


}