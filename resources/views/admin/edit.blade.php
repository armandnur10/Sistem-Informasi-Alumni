<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>

    <!-------- Bootstrap -------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-------- Local -------->
    <link rel="shortcut icon" href="https://www.smkharapanbangsa.sch.id/image/logo-HB.png">
    <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.1.5/dist/index.css">
    <link rel="stylesheet" href="{{asset ('css/index.css')}}">
    <link rel="stylesheet" href="{{asset ('css/navbar.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
      
      @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
    </style>
</head>
<body>
<header class="bg-surface-primary jru border-bottom py-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
            <div class="col-sm-6 col-12 mb-4 mb-sm-0 ">
                    <!-- Title -->

                    <h1 class="h2 mb-0 ls-tight ">Edit Data Siswa</h1>
                </div> <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">
                        <a href="{{ url ('list/'.$user->id)}}" class="btn d-inline-flex btn-sm btn-success mx-1">
                            <span class=" pe-2">
                                <i class="fa-solid fa-caret-left"></i>
                            </span>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class=" my-4">
    <div class="container-fluid">
        <form action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row justify-content-center">
                <div class="col-md-6 column">
                    <div class="col-md-12 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Profile</h5>
                            </div>

                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <input type="file" value="{{$user->photo}}" class="form-control" name="photo" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                                <div class="card h-fit-content w-fit-content mb-3">
                                    <div class="card-header">Photo</div>
                                    <div class="card-body">
                                        @if($user->photo == null)
                                        <p>Belum Ada</p>
                                        @else
                                        <img src="{{asset ('storage/images/user/'.$user->photo)}}" class="my-2 rounded border" style="height:150px;width:150px;object-fit:cover;" alt="">
                                        @endif
                                    </div>
                                </div>
                                


                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nama">@</span>
                                    <input type="text" value="{{$user->nama}}" class="form-control" name="nama"
                                        placeholder="Nama Lengkap" aria-label="nama"
                                        aria-describedby="nama" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                    <i class="fa-regular fa-id-badge"></i>
                                    </span>
                                    <input type="text"  value="{{$user->tempat_lahir}}" name="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir" aria-label="birth_place">

                                    <span class="input-group-text" id="birth_date">
                                        <i class="fa-regular fa-calendar-days"></i>
                                    </span>
                                    <input id="startDate" value="{{$user->tanggal_lahir}}" name="tanggal_lahir" class="form-control" type="date" />
                                    <span id="startDateSelected"></span>

                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="no_hp">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <input type="number" value="{{$user->no_hp}}" class="form-control" name="no_hp" placeholder="No. Telepon"
                                        aria-label="no_hp" aria-describedby="no_hp" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Akun</h5>
                            </div>

                            <div class="card-body">

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="email">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                    <input type="email" value="{{$user->email}}" class="form-control" name="email" placeholder="email"
                                        aria-label="email" aria-describedby="email">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nisn">
                                    <i class="fa-solid fa-user"></i>
                                    </span>
                                    <input type="text" value="{{$user->nisn}}" class="form-control" name="nisn" placeholder="nisn"
                                        aria-label="nisn" aria-describedby="nisn">
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Orang Tua</h5>
                            </div>

                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nama_ayah">
                                        <i class="fa-solid fa-mars"></i>
                                    </span>
                                    <input type="text" class="form-control" value="{{$user->nama_ayah}}" name="nama_ayah" placeholder="Nama Ayah"
                                        aria-label="nama_ayah" aria-describedby="nama_ayah" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="nama_ibu">
                                        <i class="fa-solid fa-venus"></i>

                                    </span>
                                    <input type="text" class="form-control" name="nama_ibu" value="{{$user->nama_ibu}}" placeholder="Nama Ibu"
                                        aria-label="nama_ibu" aria-describedby="nama_ibu" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="pekerjaan_ayah">
                                        <i class="fa-solid fa-briefcase"></i>
                                    </span>
                                    <input type="text" class="form-control" value="{{$user->pekerjaan_ayah}}" name="pekerjaan_ayah"
                                        placeholder="Pekerjaan Ayah" aria-label="pekerjaan_ayah"
                                        aria-describedby="pekerjaan_ayah" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="pekerjaan_ibu">
                                        <i class="fa-solid fa-briefcase-medical"></i>
                                    </span>
                                    <input type="text" class="form-control" name="pekerjaan_ibu"
                                        placeholder="Pekerjaan Ibu" value="{{$user->pekerjaan_ibu}}" aria-label="pekerjaan_ibu"
                                        aria-describedby="pekerjaan_ibu" required>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-6 column">

                    <div class="col-md-12 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Sekolah</h5>
                            </div>

                            <div class="card-body">
                                <div class="input group mb-3">
                                    <select name="jurusan" class="form-select" aria-label="Default select example">
                                        <option selected value="{{$user->jurusan_table->id}}">{{$user->jurusan_table->nama_jurusan}}</option>
                                        @foreach ($jurusan_table as $row)
                                        <option value="{{$row->id}}">{{$row->nama_jurusan}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="angkatan">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </span>
                                    <input type="text" class="form-control" value="{{$user->angkatan}}" name="angkatan" placeholder="Angkatan"
                                        aria-label="angkatan" aria-describedby="angkatan" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Status Alumni</h5>
                            </div>

                            <div class="card-body">

                                <div class="input group mb-3">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option selected value="{{$user->status}}">{{$user->status}}</option>
                                        <option value="kerja">Kerja</option>
                                        <option value="kuliah">Kuliah</option>
                                        <option value="kosong">Kosong</option>
                                    </select>
                                </div>

                                <div class="input group mb-3">
                                    <select name="status_pernikahan" class="form-select">
                                        <option value="{{$user->status_pernikahan}}">{{$user->status_pernikahan}}</option>
                                        <option value="menikah">
                                            Menikah
                                        </option>
                                        <option value="belum menikah">Belum menikah</option>
                                    </select>
                                </div>

                                <div class="input group mb-3">
                                    <select name="jenis_kelamin" class="form-select"
                                        aria-label="Default select example">
                                        <option selected value="{{$user->jenis_kelamin}}">{{$user->jenis_kelamin    }}</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Data Tempat</h5>
                            </div>

                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="alamat">
                                        <i class="fa-solid fa-house-user"></i>
                                    </span>
                                    <input type="alamat" class="form-control" value="{{$user->alamat}}" name="alamat" placeholder="Alamat Rumah"
                                        aria-label="alamat" aria-describedby="alamat" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="tempat_kuliah">
                                        <i class="fa-solid fa-building-columns"></i>
                                    </span>
                                    <input type="tempat_kuliah" class="form-control" value="{{$user->tempat_kuliah}}" name="tempat_kuliah"
                                        placeholder="Tempat Kuliah (opsional)" aria-label="tempat_kuliah"
                                        aria-describedby="tempat_kuliah">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="tempat_kerja">
                                        <i class="fa-solid fa-building"></i>
                                    </span>
                                    <input type="tempat_kerja" class="form-control" value="{{$user->tempat_kerja}}" name="tempat_kerja"
                                        placeholder="Tempat Kerja (opsional)" aria-label="tempat_kerja"
                                        aria-describedby="tempat_kerja">
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
                <button type="submit" class="btn btn-primary col-md-12 my-5"> <i class="bi bi-send"></i> Submit</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>

