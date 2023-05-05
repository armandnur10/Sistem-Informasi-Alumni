<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
</head>

<body>
    <nav class="sidebar close border">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{asset ('image/logo/logo.png')}}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Harapan Bangsa</span>
                    <span class="profession">Sistem Alumni</span>
                </div>
            </div>

            <i class='fa-solid fa-caret-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="/home">
                            <i class="fa-solid fa-house icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="/add">
                            <i class="fa-solid fa-user-plus icon"></i>
                            <span class="text nav-text">Tambahkan Siswa</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a href="/list">

                            <i class="fa-solid fa-address-book icon"></i>
                            <span class="text nav-text">List Siswa</span>
                        </a>
                    </li>

                    <li class="nav-links">
                        <a href="/jurusan">
                            <i class="fa-solid fa-building-columns icon"></i>
                            <span class="text nav-text">Jurusan</span>
                        </a>
                    </li>



                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="">
                    <!-- <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">{{Auth()->user()->nama}}</span>
                    </a> -->
                    <a href="#">    
                        <div class="image-text">
                            <span class="image">
                                @if(Auth()->user()->foto == null)
                                <img src="{{asset ('image/photo/user.png')}}" class="rounded" alt="">
                                @else
                                <img src="{{asset ('storage/images/user'.Auth()->user()->foto)}}" class="rounded" alt="">
                                @endif
                            </span>

                            <span class="text nav-text">{{Auth()->user()->nama}}</span>
                        </div>
                    </a>

                </li>

                <!-- <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch"> 
                        <span class="switch"></span>
                    </div>
                </li> -->

            </div>
        </div>

    </nav>


</body>

</html>
