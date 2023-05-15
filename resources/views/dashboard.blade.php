@extends('layouts.app')
@include('layouts.css')
@section('content')
<body class="g-sidenav-show">
    <main class="my-4 dashboard">
    <div class="p-4" id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card shadow" style="width: 18rem; z-index: 0;">
                        <div class="card-body">
                            <div class="row d-flex align-item-center justify-content-center">
                                <div class="col-md-6">
                                    <i class='bx bxs-user bx-lg mt-4'></i>
                                </div>
                                <div class="col-md-6 ml-4">
                                    <h3 class="h3 scroll">235</h3>
                                    <span>Teknik Laboratorium medik</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow" style="width: 18rem; z-index: 0;">
                        <div class="card-body">
                            <div class="row d-flex align-item-center justify-content-center">
                                <div class="col-md-6">
                                    <i class='bx bxs-user bx-lg mt-4'></i>
                                </div>
                                <div class="col-md-6 ml-4">
                                    <h3 class="h3 scroll">235</h3>
                                    <span>Teknik Komputer Jaringan</span>
                                </div>
                            </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow" style="width: 18rem; z-index: 0;">
                        <div class="card-body">
                            <div class="row d-flex align-item-center justify-content-center">
                                <div class="col-md-6">
                                    <i class='bx bxs-user bx-lg mt-4'></i>
                                </div>
                                <div class="col-md-6 ml-4">
                                    <h3 class="h3 scroll">235</h3>
                                    <span>Akuntansi Komputer</span>
                                </div>
                            </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow" style="width: 18rem; z-index: 0;">
                        <div class="card-body">
                            <div class="row d-flex align-item-center justify-content-center">
                                <div class="col-md-6">
                                    <i class='bx bxs-user bx-lg mt-4'></i>
                                </div>
                                <div class="col-md-6 ml-4">
                                    <h3 class="h3 scroll">235</h3>
                                    <span>Farmasi Kesehatan</span>
                                </div>
                            </div>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                          <canvas id="chartMy" width="400" height="400"></canvas>
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