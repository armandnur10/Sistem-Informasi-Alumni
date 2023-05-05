@extends('layouts.app')

@section('title')
    Edit {{$jurusan->nama_jurusan}}
@endsection


@section('content')
<!-- Main -->
<main class=" my-4 jurusan">
    <div class="container-fluid list-siswa">
        <div class="card col-md-6 shadow border mb-7">
            <div class="card-header">
                <h5 class="mb-0">Tambahkan Jurusan</h5>
            </div>
            <div class="card-body">
                <form action="{{route('jurusan.update', $jurusan->id)}}" method="post">
                @csrf
                {{method_field('PUT')}}
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Jurusan">+</span>
                        <input type="text" class="form-control" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}" placeholder="Jurusan" aria-label="Jurusan"
                            aria-describedby="jurusan" required>
                    </div>
                    <div class="input-group btn-jurusan mb-3">
                        <button type="submit" class="btn border">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
