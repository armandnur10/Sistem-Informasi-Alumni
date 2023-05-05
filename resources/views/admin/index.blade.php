@extends('layouts.app')

@section('title', 'List Siswa')

@section('content')
<!-- Header -->

<!-- Main -->
<main class=" my-4">
    <div class="container-fluid list-siswa ">
        <div class="card shadow border mb-7">
            <div class="card-header">
                <h5 class="mb-0">List Siswa</h5>
                <div class="flex">
                    <a href="{{route('userexport')}}" class="btn btn-success m-1">Export</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Import
                    </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="test">
                    <thead class="thead-light">
                        <tr>
                            <th class="photo">Photo</th>
                            <th>Nama Lengkap</th>
                            <th class="jurusan">Jurusan</th>
                            <th class="angkatan">Angkatan</th>
                            <th class="status">Status</th>
                            <th></th>
                        </tr>



                    </thead>
                    <tbody>

                        @foreach ($user as $row)
                        @if($row-> level == 'siswa')
                        <tr>
                            <td class="photo">
                                @if($row->photo == null)
                                @if($row->jenis_kelamin == 'laki-laki')
                                <img src="{{asset('image/photo/man.png')}}" alt="..."
                                    class="img-profile rounded-circle">
                                @elseif($row->jenis_kelamin == 'perempuan')
                                <img src="{{asset('image/photo/woman.png')}}" alt="..."
                                    class="img-profile rounded-circle">
                                @else
                                <img src="{{asset('image/photo/user.png')}}" alt="..."
                                    class="img-profile rounded-circle">
                                @endif
                                @else
                                <img alt="..." src="{{asset ('storage/images/user/'.$row->photo)}}"
                                    class="img-profile rounded-circle">
                                @endif
                            </td>
                            <td class="column-responsive" >
                                <p>{{$row->nama}}</p>
                                <p class="jurusan-responsive">{{$row->jurusan_table->nama_jurusan}}</p>
                            </td>
                            <td class="jurusan">{{$row->jurusan_table->nama_jurusan}}</td>
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
                            <td class="text-end">
                                <form action="#" class="action-siswa" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url ('list/'.$row->id)}}" class="btn btn-sm btn-neutral m-1">View</a>
                                    <a href="{{ url('delete/'.$row->id) }}"
                                        class="btn btn-sm btn-square btn-neutral text-danger-hover m-1">
                                        <i class="fa-solid fa-trash-can"></i>
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
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Selesai</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Import Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Selesai</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Modal -->

    </div>
</main>

@endsection
