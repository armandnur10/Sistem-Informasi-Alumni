@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">

                <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Foto Profile</label>
                        <input type="file" name="photo" class="form-control-file">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" required name="name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" required name="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" required name="password">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">NISN</label>
                        <input type="text" class="form-control" required name="nisn">
                    </div>

                    <div class="mb-3">
                        <select name="id_jurusan" class="form-select" aria-label="Default select example">
                            <option selected>Jurusan</option>
                            @foreach ($jurusan as $row)
                            <option value="{{$row->id}}">{{$row->nama_jurusan}}</option>
                            @endforeach
                        </select>
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
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
