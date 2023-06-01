@extends('layouts.app')
@section('content')
<!-- Content -->
<main class="bg-white detail my-4">
    <div class="container rounded border mh-100">
        <div class=" bg-detail border">
            <div class="w-100 d-flex justify-content-between">
                <div class="d-flex p-5">
                    @if(Auth()->user()->photo == null)
                    @if(Auth()->user()->jenis_kelamin == 'laki-laki')
                    <img src="{{asset('image/photo/man.png')}}" alt="" class=" rounded-circle object-fit-cover"
                        width="100px" height="100px">
                    @elseif(Auth()->user()->jenis_kelamin == 'perempuan')
                    <img src="{{asset('image/photo/woman.png')}}" alt="" class=" rounded-circle object-fit-cover"
                        width="100px" height="100px">
                    @endif

                    @else
                    <img src="{{asset ('storage/images/user/'.Auth()->user()->photo)}}" alt=""
                        class=" rounded-circle object-fit-cover" style="object-fit:cover;width: 100px;height: 100px;">
                    @endif
                    <div class="mx-5 d-flex flex-column justify-content-center">
                        <h1 class="text-name">{{Auth()->user()->nama}}</h1>
                        <p class=" py-1">{{Auth()->user()->jurusan_table->nama_jurusan}}</p>
                        <p>
                            {{Auth()->user()->jenis_kelamin}}
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center p-5">
                    <div class="dropdown">
                        <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <button class="dropdown-item" id="btn-hide">
                                    <i class="fa-solid fa-eye-slash"></i>
                                    Hide title
                                </button>
                            </li>
                            <a class="dropdown-item" href="{{ route('export.pdf', ['id' => Auth()->user()->id]) }}">
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                    Download PDF
                                </a>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100 row">
                <div class="col-md-6 border d-flex align-items-center p-3">
                    <i class="fa-solid fa-phone px-2"></i>
                    @if(Auth()->user()->no_hp == null)
                    Kosong
                    @else
                    {{Auth()->user()->no_hp}}
                    @endif
                </div>
                <div class="col-md-6 border d-flex align-items-center p-3">
                    <i class="fa-solid fa-envelope px-2"></i>
                    {{Auth()->user()->email}}
                </div>
                <div class="col-md-6 border d-flex align-items-center p-3">
                    <i class="fa-solid fa-location-dot px-2"></i>
                    {{Auth()->user()->alamat}}
                </div>
                <div class="col-md-6 border d-flex align-items-center p-3">
                    <i class="fa-solid fa-graduation-cap px-2">
                    </i>
                    {{Auth()->user()->angkatan}}
                </div>

            </div>
            <div class="w-100">
                <ul class="nav nav-pills my-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase active fw-bold" id="pills-semua-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-semua" type="button" role="tab"
                            aria-controls="pills-semua" aria-selected="true">Semua</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase fw-bold" id="pills-umum-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-umum" type="button" role="tab" aria-controls="pills-umum"
                            aria-selected="true">Umum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase fw-bold" id="pills-sekolah-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-sekolah" type="button" role="tab" aria-controls="pills-sekolah"
                            aria-selected="false">Sekolah</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase fw-bold" id="pills-orang-tua-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-orang-tua" type="button" role="tab" aria-controls="pills-orang-tua"
                            aria-selected="false">Orang Tua</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase fw-bold" id="pills-status-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-status" type="button" role="tab" aria-controls="pills-status"
                            aria-selected="false">Status</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase fw-bold" id="pills-tempat-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-tempat" type="button" role="tab" aria-controls="pills-tempat"
                            aria-selected="false">Tempat</button>
                    </li>
            </div>
        </div>

        <div class="w-100 container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-semua" role="tabpanel"
                    aria-labelledby="pills-semua-tab" tabindex="0">
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Pribadi</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Nama Lengkap</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->nama}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tempat, Tanggal Lahir</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->tempat_lahir}},
                                    {{Auth()->user()->tanggal_lahir}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">No Telepon</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->no_hp}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Akun</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Email</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->email}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Username</p>
                                @if (Auth()->user()->username == null)
                                <p class="fw-bold text-subtitle">Kosong</p>
                                @else
                                <p class="fw-bold text-subtitle">{{Auth()->user()->username}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Sekolah</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Jurusan</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->jurusan_table->nama_jurusan }}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tahun Angkatan</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->angkatan}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Status</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Status</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->status}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Status Pernikahan</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->status_pernikahan}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Jenis Kelamiin</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->jenis_kelamin }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Orang Tua</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Nama Ayah</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->nama_ayah}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Nama Ibu</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->nama_ibu}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Pekerjaan Ayah</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->pekerjaan_ayah }}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Pekerjaan Ibu</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->pekerjaan_ibu }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Tempat</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Alamat Rumah</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->alamat}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tempat Kuliah</p>
                                <p class="fw-bold text-subtitle">
                                    @if(Auth()->user()->tempat_kuliah == null)
                                    Belum Ada
                                    @else
                                    {{Auth()->user()->tempat_kuliah}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tempat Kerja</p>
                                <p class="fw-bold text-subtitle">
                                    @if(Auth()->user()->tempat_kerja == null)
                                    Belum Ada
                                    @else
                                    {{Auth()->user()->tempat_kerja}}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-umum" role="tabpanel" aria-labelledby="pills-umum-tab"
                    tabindex="0">
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Pribadi</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Nama Lengkap</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->nama}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tempat, Tanggal Lahir</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->tempat_lahir}},
                                    {{Auth()->user()->tanggal_lahir}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">No Telepon</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->no_hp}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Akun</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Email</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->email}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Username</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->username}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-sekolah" role="tabpanel" aria-labelledby="pills-sekolah-tab"
                    tabindex="0">
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Sekolah</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Jurusan</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->jurusan_table->nama_jurusan }}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tahun Angkatan</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->angkatan}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-orang-tua" role="tabpanel" aria-labelledby="pills-orang-tua-tab"
                    tabindex="0">
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Orang Tua</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Nama Ayah</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->nama_ayah}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Nama Ibu</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->nama_ibu}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Pekerjaan Ayah</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->pekerjaan_ayah }}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Pekerjaan Ibu</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->pekerjaan_ibu }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab"
                    tabindex="0">
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Status</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Status</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->status}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Status Pernikahan</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->status_pernikahan}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Jenis Kelamiin</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->jenis_kelamin }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-tempat" role="tabpanel" aria-labelledby="pills-tempat-tab"
                    tabindex="0">
                    <div class="px-4 pb-4">
                        <h1 class="text-title p-5">Informasi Tempat</h1>
                        <div class="row  mb-5">
                            <div class="col-md-6 p-5">
                                <p class="text-secondary text-subtitle">Alamat Rumah</p>
                                <p class="fw-bold text-subtitle">{{Auth()->user()->alamat}}</p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tempat Kuliah</p>
                                <p class="fw-bold text-subtitle">
                                    @if(Auth()->user()->tempat_kuliah == null)
                                    Belum Ada
                                    @else
                                    {{Auth()->user()->tempat_kuliah}}
                                    @endif
                                </p>
                            </div>
                            <div class="col-md-6 p-5 ">
                                <p class="text-secondary text-subtitle">Tempat Kerja</p>
                                <p class="fw-bold text-subtitle">
                                    @if(Auth()->user()->tempat_kerja == null)
                                    Belum Ada
                                    @else
                                    {{Auth()->user()->tempat_kerja}}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>

@endsection
