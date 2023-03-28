@extends('layouts.app')

@section('content')
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
                            <span class="input-group-text" id="nama_lengkap">@</span>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"
                                aria-label="nama_lengkap" aria-describedby="nama_lengkap" required>
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

            <div class="col-md-6 my-3">
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






            <div class="mb-3">
                <select name="status" class="form-select" aria-label="Default select example">
                    <option selected>status</option>
                    <option value="kerja">Kerja</option>
                    <option value="kuliah">Kuliah</option>
                    <option value="kosong">Kosong</option>
                </select>
            </div>

            <div class="mb-3">
                <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                    <option selected>Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Angkatan</label>
                <input type="number" class="form-control" required name="angkatan">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" required name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
