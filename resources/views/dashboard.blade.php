@extends('layouts.app')
@include('layouts.css')
@section('title', 'Dashboard')
@section('content')

<body class="g-sidenav-show">
    <main class="my-4 dashboard">
        <div class="p-4" id="main-content">
            <div class="container-fluid">
                <p class="text-center text-black my-4" >Jumlah Alumni perjurusan</p>
                <div class="row">
                    
                    
                    <div class="col-md-3 mb-3">
                        <div class="card shadow" style="z-index: 0;">
                            <div class="card-body">
                                <div class="row d-flex align-item-center justify-content-center">
                                    <div class="col-md-6">
                                        <i class='bx bxs-user bx-lg'></i>
                                    </div>
                                    <div class="col-md-6 ml-4 d-flex justify-content-center align-items-center">
                                        <h3 class="h3 scroll">{{$jumlah_perjurusan['tkj']}}</h3>
                                    </div>
                                    <div class="col-md-12 my-2">

                                        <span>Teknik Komputer Jaringan</span>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="/jurusan/1" class="btn btn-dark btn-sm rounded-pill">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow" style="z-index: 0;">
                            <div class="card-body">
                                <div class="row d-flex align-item-center justify-content-center">
                                    <div class="col-md-6">
                                        <i class='bx bxs-user bx-lg'></i>
                                    </div>
                                    <div class="col-md-6 ml-4 d-flex justify-content-center align-items-center">
                                        <h3 class="h3 scroll">{{$jumlah_perjurusan['ak']}}</h3>
                                    </div>
                                    <div class="col-md-12 my-2">

                                        <span>Akuntansi Komputer</span>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="/jurusan/2" class="btn btn-dark btn-sm rounded-pill">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow" style="z-index: 0;">
                            <div class="card-body">
                                <div class="row d-flex align-item-center justify-content-center">
                                    <div class="col-md-6">
                                        <i class='bx bxs-user bx-lg'></i>
                                    </div>
                                    <div class="col-md-6 ml-4 d-flex justify-content-center align-items-center">
                                        <h3 class="h3 scroll">{{$jumlah_perjurusan['fk']}}</h3>
                                    </div>
                                    <div class="col-md-12 my-2">

                                        <span>Farmasi Kesehatan</span>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="/jurusan/3" class="btn btn-dark btn-sm rounded-pill">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow" style="z-index: 0;">
                            <div class="card-body">
                                <div class="row d-flex align-item-center justify-content-center">
                                    <div class="col-md-6">
                                        <i class='bx bxs-user bx-lg'></i>
                                    </div>
                                    <div class="col-md-6 ml-4 d-flex justify-content-center align-items-center">
                                        <h3 class="h3 scroll">{{$jumlah_perjurusan['tlm']}}</h3>
                                    </div>
                                    <div class="col-md-12 my-2">

                                        <span>Teknik Laboratorium medik</span>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="/jurusan/4" class="btn btn-dark btn-sm rounded-pill">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class="row my-5 grafik">
                <p class="text-center text-black my-4" >Diagram Jumlah lulusan siswa pertahunnya  & Grafik perbandingan siswa alumni perempuan dan laki-laki </p>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card col-md-10 my-4">
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card col-md-10 my-4">
                    <div class="card-body">
                        <canvas id="chartMy" width="400" height="400"></canvas>
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
