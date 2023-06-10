<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem informasi Alumni</title>

    <script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>

    <!-------- Bootstrap -------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-------- Local -------->
    <link rel="shortcut icon" href="https://www.smkharapanbangsa.sch.id/image/logo-HB.png">
    <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.1.5/dist/index.css">
    <link rel="stylesheet" href="{{asset ('css/index.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <div class="d-flex flex-column flex-lg-row h-lg-full">
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <div class="container-fluid p-0 vh-100 profile index">
                @if(Auth()->user()->level == 'admin')
                <a href="/dashboard" class="btn absolute btn-success">
                    <i class="bi bi-caret-left-fill"></i>
                    Back
                </a>
                @else
                <a href="/home" class="btn absolute btn-success">
                    <i class="bi bi-caret-left-fill"></i>
                    Back
                </a>
                @endif
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="{{asset('image/background/bg-landing-pg.png')}}" class="img-header rounded-top"
                                alt="">
                            @if(Auth()->user()->photo == null)
                            @if(Auth()->user()->level == 'admin')
                            <img src="{{asset ('image/photo/user.png')}}" class="img-profile" alt="">
                            @else
                            @if(Auth()->user()->jenis_kelamin == 'laki-laki')
                            <img src="{{asset ('image/photo/man.png')}}" class="img-profile" alt="">
                            @elseif(Auth()->user()->jenis_kelamin == 'perempuan')
                            <img src="{{asset ('image/photo/woman.png')}}" class="img-profile" alt="">
                            @endif
                            @endif
                            @else
                            <img src="{{asset ('storage/images/user/'.Auth()->user()->photo)}}" class="img-profile"
                                alt="">
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <p class="text-subtitle">Nama</p>
                                <p class="text-title text-black">
                                    {{Auth()->user()->nama}}
                                </p>
                            </div>

                            @if(Auth()->user()->level == 'siswa')
                            <div class="d-flex flex-column">
                                <p class="text-subtitle">Jurusan</p>
                                <p class="text-title text-black">
                                    {{Auth()->user()->jurusan_table->nama_jurusan}}
                                </p>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-subtitle">Tempat Tanggal Lahir</p>
                                <p class="text-title text-black">
                                    {{Auth()->user()->tempat_lahir}}, {{Auth()->user()->tanggal_lahir}}
                                </p>
                            </div>
                            @else
                            @endif

                            <div class="d-flex flex-column">
                                <p class="text-subtitle">Username</p>
                                @if(Auth()->user()->username == null)
                                <p class="text-title text-black">Belum ada</p>
                                @else
                                <p class="text-title text-black">
                                    {{Auth()->user()->username}}
                                </p>
                                @endif
                            </div>
                            <div class="d-flex flex-column">
                                <p class="text-subtitle">Email</p>
                                <p class="text-title text-black">
                                    {{Auth()->user()->email}}
                                </p>
                            </div>
                            <div class="d-flex">
                                <a href="{{route ('profile.edit', Auth()->user()->id )}}"
                                    class="btn-success btn h-fit-content my-3">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Edit
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    class="btn-danger mx-2 btn h-fit-content my-3">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

