@extends('layouts.app')
@section('title')
{{$jurusan->nama_jurusan}}
@endsection
@section('content')
<!-- Main -->
<main class=" my-4">
    <div class="container-fluid list-siswa jurusan">
        <div class="card shadow border mb-7">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">
                    {{ $jurusan->nama_jurusan }}
                </h5>
                <a href="/jurusan/{{$jurusan->id}}/edit" class="btn btn-sm btn-primary edit m-1">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover" id="test">
                    <thead class="thead-light">
                        <tr>
                            <th class="photo">Photo</th>
                            <th class="nama">Nama Lengkap</th>
                            <th class="jurusan">Jurusan</th>
                            <th class="angkatan">Angkatan</th>
                            <th class="status">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        @if($row->level == 'siswa')
                        @if($row->jurusan_table->nama_jurusan == $jurusan->nama_jurusan)
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
                                <img src="{{asset('image/photo/row.png')}}" alt="..."
                                    class="img-profile rounded-circle">
                                @endif
                                @else
                                <img alt="..." src="{{asset ('storage/images/user/'.$row->photo)}}"
                                    class="img-profile rounded-circle">
                                @endif
                            </td>
                            <td>{{$row->nama}}</td>
                            <td class="jurusan">{{$jurusan->nama_jurusan}}</td>
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
                            <td class="text-end action">
                                <form action="#" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url ('list/'.$row->id)}}" class="btn btn-sm btn-neutral">View</a>
                                    <a href="{{ url('delete/'.$row->id) }}"
                                        class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @else
                        @endif
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
