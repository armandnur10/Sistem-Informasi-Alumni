<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Jurusan;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $user = User::all()->count();
        $jurusan = Jurusan::all();
        $tkj = User::where('jurusan', '1')->count();
        $ak = User::where('jurusan', '2')->count();
        $fk = User::where('jurusan', '3')->count();
        $tlm = User::where('jurusan', '4')->count();
        $perempuan = User::where('jenis_kelamin', 'perempuan')->count();
        $laki = User::where('jenis_kelamin', 'laki-laki')->count();

        $data = User::select(DB::raw('angkatan as year'), DB::raw('COUNT(*) as count'))
            ->groupBy('year')
            ->get();

        $years = [];
        $counts = [];

        foreach ($data as $item) {
            array_push($years, $item->year);
            array_push($counts, $item->count);
        }

        $jumlah_perjurusan = [
            'tkj' => $tkj,
            'ak' => $ak,
            'fk' => $fk,
            'tlm' => $tlm
        ];

        $jenis_kelamin = [
            'perempuan' => $perempuan,
            'laki' => $laki
        ];

        $grafik_tahun = [
            'data' => $data,
            'years' => $years,
            'counts' => $counts
        ];





        return view('dashboard', compact('user','jurusan'))->with(['jumlah_perjurusan' => $jumlah_perjurusan, 'jenis_kelamin' => $jenis_kelamin, 'grafik_tahun' => $grafik_tahun]);
    }
}
