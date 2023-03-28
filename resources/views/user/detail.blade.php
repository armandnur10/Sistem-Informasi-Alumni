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
                        <a href="/list" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-caret-left-fill"></i>
                            </span>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main -->
<main class="bg-surface-secondary">
    <div class="container detail">
        <div class="row justify-content-center">
            <div class="col-md-4 border d-flex align-items-center flex-column" style="min-height:100px;">
                <div class="profile align-items-center d-flex w-100 justify-content-center">
                    <img src="{{asset ('storage/images/user/'.$user->photo)}}" class="rounded-circle mx-2 my-4"
                        style="object-position: center;" alt="">
                    <div class="profile-text mx-2">
                        <p class="fw-bold fs-5">{{$user->name}}</p>
                        @foreach ($user->jurusans as $details)
                        <p class="fw-normal fs-6">{{$details->nama_jurusan}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="angkatan py-2 border">
                    <p class="">Angkatan</p>
                    <p class="fw-bold text-secondary fs-2 txt-angkatan">{{$user->angkatan}}</p>
                </div>
                <div class="w-100 d-flex flex-column align-items-center py-4">
                    <div class="input-group mb-3 w-75">
                        <input type="text" class="form-control" value="{{$user->name}}" aria-label="Username"
                            aria-describedby="nama" disabled>
                        <span class="input-group-text" id="nama">
                            <i class="bi bi-person-fill"></i>
                        </span>
                    </div>

                    <div class="input-group mb-3 w-75">
                        <input type="text" class="form-control" value="{{$user->nisn}}" aria-label="nisn"
                            aria-describedby="nisn" disabled>
                        <span class="input-group-text" id="nisn">
                            NISN
                        </span>
                    </div>

                    <div class="input-group mb-3 w-75">
                        <input type="text" class="form-control" value="{{$user->nisn}}" aria-label="nisn"
                            aria-describedby="nisn" disabled>
                        <span class="input-group-text" id="nisn">
                            <i class="bi bi-gender-ambiguous"></i>
                        </span>
                    </div>



                    <div class="input-group alamat mb-3 w-75">
                        <span class="btn bg border" id="alamat">
                            <i class="bi bi-geo-alt-fill"></i>
                        </span>
                        <span class="p-2 border-top border-end border-bottom rounded-end" id="alamat">
                            Alamat
                        </span>
                        <div class="content-alamat rounded w-100 border my-2">
                            <p class="m-2">{{$user->alamat}}</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-8 border" style="min-height:100px;">
            </div>
        </div>
    </div>
</main>
@endsection
