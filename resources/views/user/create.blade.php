@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6 column">
                <div class="col-md-12 my-3">
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
                                <span class="input-group-text" id="nama_lengkap">@</span>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"
                                    aria-label="nama_lengkap" aria-describedby="nama_lengkap" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="bi bi-hospital-fill"></i>
                                </span>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"
                                    aria-label="birth_place">

                                <span class="input-group-text" id="birth_date">
                                    <i class="bi bi-calendar2-heart-fill"></i>
                                </span>
                                <input id="startDate" name="tanggal_lahir" class="form-control" type="date" />
                                <span id="startDateSelected"></span>

                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="no_hp">
                                    <i class="bi bi-telephone"></i>
                                </span>
                                <input type="number" class="form-control" name="no_hp" placeholder="No. Telepon"
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
                                    <i class="bi bi-envelope-at"></i>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="email"
                                    aria-label="email" aria-describedby="email" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="password">
                                    <i class="bi bi-key-fill"></i>
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="password"
                                    aria-label="password" aria-describedby="password" required>
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
                                    <i class="bi bi-gender-male"></i>
                                </span>
                                <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah"
                                    aria-label="nama_ayah" aria-describedby="nama_ayah" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nama_ibu">
                                    <i class="bi bi-gender-female"></i>
                                </span>
                                <input type="text" class="form-control" name="nama_ibu"
                                    placeholder="Nama Ibu" aria-label="nama_ibu"
                                    aria-describedby="nama_ibu" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="pekerjaan_ayah">
                                    <i class="bi bi-briefcase-fill"></i>
                                </span>
                                <input type="text" class="form-control" name="pekerjaan_ayah"
                                    placeholder="Pekerjaan Ayah" aria-label="pekerjaan_ayah"
                                    aria-describedby="pekerjaan_ayah" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="pekerjaan_ibu">
                                    <i class="bi bi-briefcase"></i>
                                </span>
                                <input type="text" class="form-control" name="pekerjaan_ibu"
                                    placeholder="Pekerjaan Ibu" aria-label="pekerjaan_ibu"
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
                                <select name="id_jurusan" class="form-select" aria-label="Default select example">
                                    <option selected>Jurusan</option>
                                    @foreach ($jurusan as $row)
                                    <option value="{{$row->id}}">{{$row->nama_jurusan}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="angkatan">
                                    <i class="bi bi-mortarboard"></i>
                                </span>
                                <input type="text" class="form-control" name="angkatan" placeholder="Angkatan"
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
                                    <option selected>Status</option>
                                    <option value="kerja">Kerja</option>
                                    <option value="kuliah">Kuliah</option>
                                    <option value="kosong">Kosong</option>
                                </select>
                            </div>

                            <div class="input group mb-3">
                                <select name="status_pernikahan" class="form-select">
                                    <option selected>Status Pernikahan</option>
                                    <option value="menikah">
                                        Menikah
                                    </option>
                                    <option value="belum menikah">Belum menikah</option>
                                </select>
                            </div>

                            <div class="input group mb-3">
                                <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                    <option selected>Jenis Kelamin</option>
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
                                    <i class="bi bi-house-door-fill"></i>
                                </span>
                                <input type="alamat" class="form-control" name="alamat" placeholder="Alamat Rumah"
                                    aria-label="alamat" aria-describedby="alamat" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="tempat_kuliah">
                                    <i class="bi bi-bank2"></i>
                                </span>
                                <input type="tempat_kuliah" class="form-control" name="tempat_kuliah"
                                    placeholder="Tempat Kuliah (opsional)" aria-label="tempat_kuliah"
                                    aria-describedby="tempat_kuliah" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="tempat_kerja">
                                    <i class="bi bi-building-fill"></i>
                                </span>
                                <input type="tempat_kerja" class="form-control" name="tempat_kerja"
                                    placeholder="Tempat Kerja (opsional)" aria-label="tempat_kerja"
                                    aria-describedby="tempat_kerja" required>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        </div>
    </form>
</div>
@endsection
