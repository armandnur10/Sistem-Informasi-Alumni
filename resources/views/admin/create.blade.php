@extends('layouts.app')

@section('title', 'Tambahkan Siswa')

@section('content')


<main class=" my-4">
    <div class="container-fluid">
        <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-6 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Profile</h5>
                        </div>

                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="photo" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nama">@</span>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                                    aria-label="nama" aria-describedby="nama" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fa-regular fa-id-badge"></i>
                                </span>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"
                                    aria-label="birth_place">

                                <span class="input-group-text" id="birth_date">
                                    <i class="fa-regular fa-calendar-days"></i>
                                </span>
                                <input id="startDate" name="tanggal_lahir" class="form-control" type="date" />
                                <span id="startDateSelected"></span>

                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="no_hp">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <input type="number" class="form-control" name="no_hp" placeholder="No. Telepon"
                                    aria-label="no_hp" aria-describedby="no_hp" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Orang Tua</h5>
                        </div>

                        <div class="card-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nama_ayah">
                                    <i class="fa-solid fa-mars"></i>
                                </span>
                                <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah"
                                    aria-label="nama_ayah" aria-describedby="nama_ayah" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nama_ibu">
                                    <i class="fa-solid fa-venus"></i>

                                </span>
                                <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu"
                                    aria-label="nama_ibu" aria-describedby="nama_ibu" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="pekerjaan_ayah">
                                    <i class="fa-solid fa-briefcase"></i>
                                </span>
                                <input type="text" class="form-control" name="pekerjaan_ayah"
                                    placeholder="Pekerjaan Ayah" aria-label="pekerjaan_ayah"
                                    aria-describedby="pekerjaan_ayah" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="pekerjaan_ibu">
                                    <i class="fa-solid fa-briefcase-medical"></i>
                                </span>
                                <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu"
                                    aria-label="pekerjaan_ibu" aria-describedby="pekerjaan_ibu" required>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="mb-0">Data Akun</h5>
                        </div>

                        <div class="card-body">

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="email">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="email"
                                    aria-label="email" aria-describedby="email" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nisn">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="number" class="form-control" name="nisn" placeholder="nisn"
                                    aria-label="nisn" aria-describedby="nisn" required>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Sekolah</h5>
                        </div>

                        <div class="card-body">
                            <div class="input group mb-3">
                                <p><span class="badge bg-secondary">Jurusan</span></p>
                                <select name="jurusan" class="form-select @error('status') is-invalid @enderror mt-2" aria-label="Default select example">
                                    @foreach ($jurusan_table as $row)
                                    <option value="{{$row->id}}">{{$row->nama_jurusan}}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="angkatan">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </span>
                                <input type="number" class="form-control" name="angkatan" placeholder="Angkatan"
                                    aria-label="angkatan" aria-describedby="angkatan" required>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-md-6 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Status Alumni</h5>
                        </div>

                        <div class="card-body">

                            <div class="input group mb-3">
                                <p><span class="badge bg-secondary">Status</span></p>
                                <select name="status" class="form-select @error('status') is-invalid @enderror mt-2"
                                    aria-label="Default select example">
                                    <option value="kerja">Kerja</option>
                                    <option value="kuliah">Kuliah</option>
                                    <option value="menganggur">menganggur</option>
                                </select>
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="input group mb-3">
                                <p><span class="badge bg-primary">Status Pernikahan</span></p>
                                <select name="status_pernikahan" class="form-select mt-2">
                                    <option value="menikah">
                                        Menikah
                                    </option>
                                    <option value="belum menikah">Belum menikah</option>
                                </select>
                            </div>


                            <div class="input group mb-3">
                                <p><span class="badge bg-success">Jenis Kelamin</span></p>
                                <select name="jenis_kelamin"
                                    class="form-select @error('jenis_kelamin') is-invalid @enderror mt-2"
                                    aria-label="Default select example">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 my-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Data Tempat</h5>
                        </div>

                        <div class="card-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="alamat">
                                    <i class="fa-solid fa-house-user"></i>
                                </span>
                                <input type="alamat" class="form-control" name="alamat" placeholder="Alamat Rumah"
                                    aria-label="alamat" aria-describedby="alamat" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="tempat_kuliah">
                                    <i class="fa-solid fa-building-columns"></i>
                                </span>
                                <input type="tempat_kuliah" class="form-control" name="tempat_kuliah"
                                    placeholder="Tempat Kuliah (opsional)" aria-label="tempat_kuliah"
                                    aria-describedby="tempat_kuliah">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="tempat_kerja">
                                    <i class="fa-solid fa-building"></i>
                                </span>
                                <input type="tempat_kerja" class="form-control" name="tempat_kerja"
                                    placeholder="Tempat Kerja (opsional)" aria-label="tempat_kerja"
                                    aria-describedby="tempat_kerja">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-md-12 my-5"> <i class="bi bi-send"></i> Submit</button>
            </div>
        </form>
    </div>
</main>
@endsection
