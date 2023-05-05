@extends('layouts.app')
@section('title', 'Jurusan')
@section('content')
<!-- Header -->
<!-- Main -->
<main class=" my-4 jurusan">
    <div class="container-fluid list-siswa">
        <div class="card col-md-6 shadow border mb-7">
            <div class="card-header">
                <h5 class="mb-0">Tambahkan Jurusan</h5>
            </div>
            <div class="card-body">
                <form action="{{route('jurusan.store')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="Jurusan">+</span>
                        <input type="text" class="form-control" name="nama_jurusan" placeholder="Jurusan" aria-label="Jurusan"
                            aria-describedby="jurusan" required>
                    </div>
                    <div class="input-group btn-jurusan mb-3">
                        <button type="submit" class="btn border">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow border mb-7">
            <div class="card-header">
                <h5 class="mb-0">List Jurusan</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($jurusan as $row)
                            <td class="fw-bold ">{{$row->nama_jurusan}}</td>
                            <td class="action">
                                <a href="/jurusan/{{$row->id}}/edit" class="btn btn-sm btn-primary edit m-1">Edit</a>
                                <a href="/jurusan/{{$row->id}}" class="btn btn-sm btn-secondary m-1">See</a>
                                <form action="/jurusan/{{$row->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger m-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>



                </table>
                <!-- <div class="card-footer border-0 py-5">
                <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
            </div> -->
            </div>
        </div>
    </div>
</main>

@endsection
