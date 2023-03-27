<!-- Vertical Navbar -->

<head>
    <style>
        .sidebar li .submenu {
            list-style: none;
            margin: 0;
            padding: 0;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .rotate-down{
            transform: rotate(180deg);
        }

    </style>
</head>

<body>
    <nav class="navbar show navbar-vertical sidebar h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
        id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0 d-flex align-items-center fw-bold"
                href="{{ url('/home') }}">
                <img src="https://www.smkharapanbangsa.sch.id/image/logo-HB.png" alt="...">
                <p class="mx-2">Sistem <br> Informasi Alumni</p>
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div> <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->

                <ul class="navbar-nav">
                    @if (auth()->user()->level == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/add">
                            <i class="bi bi-person-fill-add"></i>
                            Tambahkan Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jurusan">
                            <i class="bi bi-file-plus-fill"></i>
                            Tambahkan Jurusan
                        </a>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#">
                        <i class="bi bi-card-list"></i>

                            Berdasarkan Jurusan
                        </a>
                        <ul class="submenu collapse">
                            @foreach ($jurusan as $row)
                            <li><a class="nav-link" href="/jurusan/{{$row->id}}">{{$row->nama_jurusan}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                            <i class="bi bi-house-fill"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">
                            <i class="bi bi-person-lines-fill"></i>
                            Data Siswa
                        </a>
                    </li>


                </ul> <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20"> <!-- Navigation -->

                <div class="mt-auto"></div> <!-- User (md) -->
                <ul class="navbar-nav " id="nav_accordion">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{asset ('storage/images/user/'.Auth::user()->photo)}}"
                                class="me-2 border rounded-circle object-fit-cover "
                                style="width:30px;height: 30px;object-fit: cover;" alt="">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-left"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div> <!-- Collapse -->
        
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {

                element.addEventListener('click', function (e) {



                    let nextEl = element.nextElementSibling;
                    let parentEl = element.parentElement;


                    if (nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);

                        if (nextEl.classList.contains('show')) {
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            // find other submenus with class=show
                            var opened_submenu = parentEl.parentElement.querySelector(
                                '.submenu.show');
                            // if it exists, then close all of them
                            if (opened_submenu) {
                                new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                }); // addEventListener
            }) // forEach
        });


    </script>
</body>
