@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">

                <form action="/savelist" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Foto Profile</label>
                        <input type="file" name="photo" required class="form-control-file">
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
                        <select name="jurusan" class="form-select" aria-label="Default select example">
                            <option selected>Jurusan</option>
                            <option>Teknik Komputer Jaringan</option>
                            <option>Farmasi</option>
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
