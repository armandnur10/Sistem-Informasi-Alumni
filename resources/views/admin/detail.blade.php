<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-------- Bootstrap -------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-------- Local -------->
    <link rel="shortcut icon" href="https://www.smkharapanbangsa.sch.id/image/logo-HB.png">
    <link rel="stylesheet" href="{{asset ('css/index.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <header class="bg-surface-primary border-bottom py-6">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <h1 class="mx-2 h2 mb-0 ls-tight golden">Detail Siswa</h1>
            <a href="/list" class="btn d-inline-flex btn-sm btn-success mx-2">
                <span class=" pe-2">
                    <i class="bi bi-caret-left-fill"></i>
                </span>
                <span>Back</span>
            </a>
        </div>
    </header>
    <!-- Content -->
    <main class="bg-white detail my-4">
        <div class="container rounded border mh-100">
            <div class=" bg-detail border">
                <div class="w-100 profile-top justify-content-between">
                    <div class="d-flex p-5">
                        @if($user->photo == null)
                        @if($user->jenis_kelamin == 'laki-laki')
                        <img src="{{asset('image/photo/man.png')}}" alt="" class=" rounded-circle object-fit-cover"
                            width="100px" height="100px">
                        @elseif($user->jenis_kelamin == 'perempuan')
                        <img src="{{asset('image/photo/woman.png')}}" alt="" class=" rounded-circle object-fit-cover"
                            width="100px" height="100px">
                        @endif

                        @else
                        <img src="{{asset ('storage/images/user/'.$user->photo)}}" alt=""
                            class=" rounded-circle object-fit-cover"
                            style="object-fit:cover;width: 100px;height: 100px;">
                        @endif
                        <div class="mx-5 d-flex flex-column justify-content-center">
                            <h1 class="text-name">{{$user->nama}}</h1>
                            <p class=" py-1">{{$user->jurusan_table->nama_jurusan}}</p>
                            <p>
                                {{$user->jenis_kelamin}}
                            </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-5">
                        <a href="{{route('user.edit', $user->id)}}" class="btn-success btn h-fit-content mx-5">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                        <div class="dropdown">
                            <button class="btn btn-secondary " type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ url('delete/'.$user->id) }}"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="fa-solid fa-trash-can"></i>
                                        Delete Data
                                    </a>
                                </li>
                                <a class="dropdown-item" href="{{ route('export.pdf', ['id' => $user->id]) }}">
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
                        @if($user->no_hp == null)
                        Kosong
                        @else
                        {{$user->no_hp}}
                        @endif
                    </div>
                    <div class="col-md-6 border d-flex align-items-center p-3">
                        <i class="fa-solid fa-envelope px-2"></i>
                        {{$user->email}}
                    </div>
                    <div class="col-md-6 border d-flex align-items-center p-3">
                        <i class="fa-solid fa-location-dot px-2"></i>
                        {{$user->alamat}}
                    </div>
                    <div class="col-md-6 border d-flex align-items-center p-3">
                        <i class="fa-solid fa-graduation-cap px-2">
                        </i>
                        {{$user->angkatan}}
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
                            <button class="nav-link text-uppercase fw-bold" id="pills-orang-tua-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-orang-tua" type="button" role="tab"
                                aria-controls="pills-orang-tua" aria-selected="false">Orang Tua</button>
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
                                    <p class="fw-bold text-subtitle">{{$user->nama}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tempat, Tanggal Lahir</p>
                                    <p class="fw-bold text-subtitle">{{$user->tempat_lahir}}, {{$user->tanggal_lahir}}
                                    </p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">No Telepon</p>
                                    <p class="fw-bold text-subtitle">{{$user->no_hp}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">NISN</p>
                                    <p class="fw-bold text-subtitle">{{$user->nisn}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Akun</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Email</p>
                                    <p class="fw-bold text-subtitle">{{$user->email}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Username</p>
                                    @if($user->username == null)
                                    <p class="fw-bold text-subtitle">Belum ada</p>
                                    @else
                                    <p class="fw-bold text-subtitle">{{$user->username}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Sekolah</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Jurusan</p>
                                    <p class="fw-bold text-subtitle">{{$user->jurusan_table->nama_jurusan }}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tahun Angkatan</p>
                                    <p class="fw-bold text-subtitle">{{$user->angkatan}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Status</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Status</p>
                                    <p class="fw-bold text-subtitle">{{$user->status}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Status Pernikahan</p>
                                    <p class="fw-bold text-subtitle">{{$user->status_pernikahan}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Jenis Kelamiin</p>
                                    <p class="fw-bold text-subtitle">{{$user->jenis_kelamin }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Orang Tua</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Nama Ayah</p>
                                    <p class="fw-bold text-subtitle">{{$user->nama_ayah}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Nama Ibu</p>
                                    <p class="fw-bold text-subtitle">{{$user->nama_ibu}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Pekerjaan Ayah</p>
                                    <p class="fw-bold text-subtitle">{{$user->pekerjaan_ayah }}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Pekerjaan Ibu</p>
                                    <p class="fw-bold text-subtitle">{{$user->pekerjaan_ibu }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Tempat</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Alamat Rumah</p>
                                    <p class="fw-bold text-subtitle">{{$user->alamat}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tempat Kuliah</p>
                                    <p class="fw-bold text-subtitle">
                                        @if($user->tempat_kuliah == null)
                                        Belum Ada
                                        @else
                                        {{$user->tempat_kuliah}}
                                        @endif
                                    </p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tempat Kerja</p>
                                    <p class="fw-bold text-subtitle">
                                        @if($user->tempat_kerja == null)
                                        Belum Ada
                                        @else
                                        {{$user->tempat_kerja}}
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
                                    <p class="fw-bold text-subtitle">{{$user->nama}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tempat, Tanggal Lahir</p>
                                    <p class="fw-bold text-subtitle">{{$user->tempat_lahir}}, {{$user->tanggal_lahir}}
                                    </p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">No Telepon</p>
                                    <p class="fw-bold text-subtitle">{{$user->no_hp}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Akun</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Email</p>
                                    <p class="fw-bold text-subtitle">{{$user->email}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Username</p>
                                    @if($user->username == null)
                                    <p class="fw-bold text-subtitle">Belum ada</p>
                                    @else
                                    <p class="fw-bold text-subtitle">{{$user->username}}</p>
                                    @endif
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
                                    <p class="fw-bold text-subtitle">{{$user->jurusan_table->nama_jurusan }}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tahun Angkatan</p>
                                    <p class="fw-bold text-subtitle">{{$user->angkatan}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="pills-orang-tua" role="tabpanel"
                        aria-labelledby="pills-orang-tua-tab" tabindex="0">
                        <div class="px-4 pb-4">
                            <h1 class="text-title p-5">Informasi Orang Tua</h1>
                            <div class="row  mb-5">
                                <div class="col-md-6 p-5">
                                    <p class="text-secondary text-subtitle">Nama Ayah</p>
                                    <p class="fw-bold text-subtitle">{{$user->nama_ayah}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Nama Ibu</p>
                                    <p class="fw-bold text-subtitle">{{$user->nama_ibu}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Pekerjaan Ayah</p>
                                    <p class="fw-bold text-subtitle">{{$user->pekerjaan_ayah }}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Pekerjaan Ibu</p>
                                    <p class="fw-bold text-subtitle">{{$user->pekerjaan_ibu }}</p>
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
                                    <p class="fw-bold text-subtitle">{{$user->status}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Status Pernikahan</p>
                                    <p class="fw-bold text-subtitle">{{$user->status_pernikahan}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Jenis Kelamiin</p>
                                    <p class="fw-bold text-subtitle">{{$user->jenis_kelamin }}</p>
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
                                    <p class="fw-bold text-subtitle">{{$user->alamat}}</p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tempat Kuliah</p>
                                    <p class="fw-bold text-subtitle">
                                        @if($user->tempat_kuliah == null)
                                        Belum Ada
                                        @else
                                        {{$user->tempat_kuliah}}
                                        @endif
                                    </p>
                                </div>
                                <div class="col-md-6 p-5 ">
                                    <p class="text-secondary text-subtitle">Tempat Kerja</p>
                                    <p class="fw-bold text-subtitle">
                                        @if($user->tempat_kerja == null)
                                        Belum Ada
                                        @else
                                        {{$user->tempat_kerja}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
</body>

</html>
