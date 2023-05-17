@extends('layouts.app')
@include('layouts.css')
@section('title', 'Dashboard')
@section('content')

<body class="g-sidenav-show">
    <main class="my-4 dashboard">
        <div class="p-4" id="main-content">
            <div class="container-fluid ">
                <div class="card-jurusan">
                    <p class="text-center text-black fw-semibold">Jumlah Alumni Perjurusan</p>
                    <div class="row my-5">
                        <div class="col-md-3 my-3">
                            <div class="card shadow" style=" z-index: 0;">
                                <div class="card-body">
                                    <div class="row d-flex align-item-center justify-content-center">
                                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                                            <i class='bx bxs-user bx-lg mt-4'></i>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center align-items-center ml-4">
                                            <h3 class="h3 scroll">{{$jumlah_perjurusan['tkj']}}</h3>
                                        </div>
                                        <span class="text-center my-2">Teknik Komputer Jurusan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card shadow" style=" z-index: 0;">
                                <div class="card-body">
                                    <div class="row d-flex align-item-center justify-content-center">
                                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                                            <i class='bx bxs-user bx-lg mt-4'></i>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center align-items-center ml-4">
                                            <h3 class="h3 scroll">{{$jumlah_perjurusan['ak']}}</h3>
                                        </div>
                                        <span class="text-center my-2">Akuntansi Komputer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card shadow" style=" z-index: 0;">
                                <div class="card-body">
                                    <div class="row d-flex align-item-center justify-content-center">
                                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                                            <i class='bx bxs-user bx-lg mt-4'></i>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center align-items-center ml-4">
                                            <h3 class="h3 scroll">{{$jumlah_perjurusan['fk']}}</h3>
                                        </div>
                                        <span class="text-center my-2">Farmasi Kesehatan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="card shadow" style=" z-index: 0;">
                                <div class="card-body">
                                    <div class="row d-flex align-item-center justify-content-center">
                                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                                            <i class='bx bxs-user bx-lg mt-4'></i>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center align-items-center ml-4">
                                            <h3 class="h3 scroll">{{$jumlah_perjurusan['tlm']}}</h3>
                                        </div>
                                        <span class="text-center my-2">Teknik Laboratorium Medik</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="diagram">
                    
                <p class="text-center text-black fw-semibold">Grafik Jumlah alumni lulusan pertahunnya & diagram perbandingan jumlah alumni perjurusannya</p>
                <div class="row my-3">
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chartMy" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>


        </div>
        </div>
        </div>
    </main>
    @include('layouts.js')
</body>
@endsection
