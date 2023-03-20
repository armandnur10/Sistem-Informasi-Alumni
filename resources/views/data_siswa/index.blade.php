@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom py-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight golden">Application</h1>
                </div> <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1"> 
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class="pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Create</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main -->
<main class="bg-surface-secondary my-4">
    <div class="container-fluid list-siswa">
        <div class="card shadow border-0 mb-7">
            <div class="card-header">
                <h5 class="mb-0">Applications</h5>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">
                                Photo
                            </th>
                            <th>Name</th>
                            <th class="nisn" scope="col">NISN</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($profile as $row)
                            <td>
                                <img alt="..." src="{{asset ('storage/images/profiles/'.$row->photo)}}" class="img-profile rounded-circle">
                            </td>
                            <td class="text-heading font-semibold">
                                {{$row->nama}}
                            </td>
                            <td class="nisn">{{$row->nisn}}</td>
                            <td class="text-heading font-semibold">
                                {{$row->jurusan}}
                            </td>
                            <td>{{$row->angkatan}}</td>
                            <td> Kerja </td>
                            <td class="text-end">
                                <form action="#" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url ('list/'.$row->id)}}" class="btn btn-sm btn-neutral">View</a>
                                    <a href="{{ url('delete/'.$row->id) }}"
                                        class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </form>
                            </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- <div class="card-footer border-0 py-5">
                <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
            </div> -->
        </div>
    </div>
</main>
@endsection
