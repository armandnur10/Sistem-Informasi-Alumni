@extends('layouts.user')

@section('content')
<div class="container-fluid p-0 vh-100 profile">
    <a href="/home" class="btn absolute btn-success">
    <i class="bi bi-caret-left-fill"></i>
        Back
    </a>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header p-0">
                <img src="{{asset('image/background/bg-landing-pg.png')}}" class="img-header rounded-top" alt="">
                @if(Auth()->user()->photo == null)
                    @if(Auth()->user()->level == 'admin')
                    <img src="{{asset ('image/photo/user.png')}}" class="img-profile" alt="">
                    @else
                        @if(Auth()->user()->jenis_kelamin == 'laki-laki')
                        <img src="{{asset ('image/photo/man.png')}}" class="img-profile" alt="">
                        @elseif(Auth()->user()->jenis_kelamin == 'perempuan')
                        <img src="{{asset ('image/photo/woman.png')}}" class="img-profile" alt="">
                        @endif
                    @endif
                @else
                <img src="{{asset ('storage/images/user/'.Auth()->user()->photo)}}" class="img-profile" alt="">
                @endif
            </div>
            <div class="card-body">
                <p class="text-title text-black">
                    {{Auth()->user()->nama}}
                </p>
                @if(Auth()->user()->level == 'siswa')
                <p class="text-subtitle text-black">{{Auth()->user()->jurusan_table->nama_jurusan}}</p>
                <p class="text-subtitle py-1 text-black"> 
                    <i class="fa-regular fa-calendar-days"></i>
                    {{Auth()->user()->tempat_lahir}}, {{Auth()->user()->tanggal_lahir}}
                </p>
                @else
                @endif
                
                <p class="text-subtitle text-black">
                    
                    {{Auth()->user()->username}}
                </p>
                <p class="text-subtitle text-black">
                    {{Auth()->user()->email}}
                </p>
                <div class="d-flex">
                <a href="{{route ('profile.edit', Auth()->user()->id )}}" class="btn-success btn h-fit-content my-3">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Edit
                    </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn-danger mx-2 btn h-fit-content my-3" >
                <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
