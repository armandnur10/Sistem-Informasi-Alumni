@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom py-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight golden">Jurusan</h1>
                </div> <!-- Actions -->
                <!-- <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">
                        <a href="/add" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Create</span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</header>
<!-- Main -->
<main class="bg-surface-secondary my-4 jurusan">
    <div class="container-fluid list-siswa">
        <div class="card col-md-6 shadow border-0 mb-7">
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

        <div class="card shadow border-0 mb-7">
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
                            <td class="text-end">
                                <a href="/jurusan/{{$row->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                                <form action="/jurusan/{{$row->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
