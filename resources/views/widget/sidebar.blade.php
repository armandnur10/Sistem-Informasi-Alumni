<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset ('css/sidebar.css')}}">
</head>

<body>
    <div class="sidebar border close">
        <div class="logo-details">
            <div class="img-container">
                <img src="{{asset ('image/logo/logo.png')}}" alt="">

            </div>
            <span class="logo_name">Harapan<span style="opacity:0;">.</span>Bangsa</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/dashboard">
                    <i class="fa-solid fa-house"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/dashboard">Dashboard</a></li>
                </ul>
            </li>


            <li>
                <a href="/list">
                    <i class="fa-solid fa-address-book"></i>
                    <span class="link_name">List<span style="opacity:0;">.</span>Siswa</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('user.index')}}">List Siswa</a></li>
                </ul>
            </li>

            <li>
                <a href="/add">
                    <i class="fa-solid fa-user-plus"></i>
                    <span class="link_name">Tambahkan<span style="opacity:0;">.</span>Siswa</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/add">Tambah Siswa</a></li>
                </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="fa-solid fa-building-columns"></i>
                        <span class="link_name">Jurusan</span>
                    </a>
                    <i class="fa-solid fa-caret-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Jurusan</a></li>
                    @foreach ($jurusan as $row)
                    <li><a href="/jurusan/{{$row->id}}">{{$row -> nama_jurusan}}</a></li>
                    @endforeach
                </ul>
            </li>


            <li>
                <a href="/jurusan">
                    <i class="fa-regular fa-square-plus"></i>
                    <span class="link_name">Tambahkan<span style="opacity:0;">.</span>Jurusan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/jurusan">Tambahkan<span style="opacity:0;">.</span>Jurusan</a></li>
                </ul>

            <li>
                <div class="profile-details">
                    <a href="/profile">
                    <div class="profile-content">
                        @if($row->photo == null)
                        @if($row->jenis_kelamin == 'laki-laki')
                        <img src="{{asset('image/photo/man.png')}}" alt="...">
                        @elseif($row->jenis_kelamin == 'perempuan')
                        <img src="{{asset('image/photo/woman.png')}}" alt="...">
                        @else
                        <img src="{{asset('image/photo/user.png')}}" alt="...">
                        @endif
                        @else
                        <img alt="..." src="{{asset ('storage/images/user/'.$row->photo)}}">
                        @endif
                    </div>
                    </a>
                    
                    <a class="no-hover" href="/profile">
                    <div class="name-job">
                        <div class="profile_name">{{Auth()->user()->nama}}</div>
                        <div class="job">{{Auth()->user()->username}}</div>
                    </div>
                    </a>
                    
                    <a class="no-hover" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>




</body>

</html>
