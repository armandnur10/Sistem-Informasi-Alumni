@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="bg-surface-primary jru border-bottom py-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight ">Data Siswa</h1>
                </div> <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">
                        <a href="/add" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Create</span>
                        </a>
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
                <h5 class="mb-0">List Siswa</h5>
                <div class="flex">
                    <a href="{{route('userexport')}}" class="btn btn-success m-1">Export</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Import
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="test">
                    <thead class="thead-light">
                        <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th class="nisn">NISN</th>
                            <th class="jurusan">Jurusan</th>
                            <th class="angkatan">Angkatan</th>
                            <th class="status">Status</th>
                            <th>Aksi</th>
                        </tr>



                    </thead>
                    <tbody>

                        @foreach ($user as $row)
                        @if($row-> level == 'siswa')
                        <tr>
                            <td>
                                @if($row->photo == null)
                                    @if($row->jenis_kelamin == 'laki-laki')
                                    <img src="{{asset('image/photo/man.png')}}" alt="..."
                                        class="avatar avatar-sm rounded-circle">
                                    @elseif($row->jenis_kelamin == 'perempuan')
                                    <img src="{{asset('image/photo/woman.png')}}" alt="..."
                                        class="avatar avatar-sm rounded-circle">
                                    @else
                                    <img src="{{asset('image/photo/user.png')}}" alt="..."
                                        class="avatar avatar-sm rounded-circle">
                                    @endif
                                @else
                                <img alt="..." src="{{asset ('storage/images/user/'.$row->photo)}}"
                                    class="img-profile rounded-circle">
                                @endif
                            </td>
                            <td>{{$row->name}}</td>
                            <td class="nisn">{{$row->nisn}}</td>
                            <td class="jurusan">{{$row->jurusan->nama_jurusan}}</td>
                            <td class="angkatan">{{$row->angkatan}}</td>
                            <td class="status">
                                @if($row->status == 'kosong')
                                <span class="p-1 text-dark position-relative">
                                    {{$row->status}}
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-secondary border border-light rounded-circle">
                                    </span>
                                </span>
                                @elseif($row->status == 'kuliah')
                                <span class="p-1 text-dark position-relative">
                                    {{$row->status}}
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                                    </span>
                                </span>
                                @elseif($row->status == 'kerja')
                                <span class="p-1 text-dark position-relative">
                                    {{$row->status}}
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle p-1 bg-primary border border-light rounded-circle">
                                    </span>
                                </span>
                                @endif
                            </td>
                            <td>
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
                        </tr>
                        @endif
                        @endforeach

                    </tbody>



                </table>


            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route ('userimport')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="file" class="" name="file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

    </div>
</main>

@endsection
