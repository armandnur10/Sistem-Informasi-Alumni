<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Alumni</title>
    <!-- datatables -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>

    <!-------- Bootstrap -------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-------- Local -------->
    <link rel="shortcut icon" href="https://www.smkharapanbangsa.sch.id/image/logo-HB.png">
    <link rel="stylesheet" href="{{asset ('css/index.css')}}">
    <!-- <link rel="stylesheet" href="{{asset ('css/sidebar.css')}}"> -->
    <link rel="stylesheet" href="{{asset ('css/nyoba.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

        @media screen and (max-width: 992px) {
            .navbar-brand img {
                width: 50px;
            }
        }

    </style>
</head>

<body>

    @inject('jurusan', 'App\Models\Jurusan')

    <!-- Dashboard -->
    @include('widget.sidebar', ['jurusan' => $jurusan->all()])
    <!-- Main content -->
    <section class="home-section">

        <section class="navbar-burger border" id="navbar">
            <div class="logo">
                <img src="{{asset ('image/logo/logo.png')}}" class="img-logo" alt="">
                <i class="fa-solid fa-bars mx-2  cursor-pointer menu-btn"></i>
                @yield('title')
            </div>


            <!-- Responsive Burger Navbar -->
            <input id="menu-toggle" type="checkbox" />
            <label class='menu-button-container' for="menu-toggle">
                <div class='menu-button'></div>
            </label>
            <ul class="menu-list">
                <li><a href="/home">Dashboard</a></li>
                <li><a href="/list">List Siswa</a></li>
                <li><a href="/add">Tambahkan Siswa</a></li>
                <li><a href="/jurusan">Jurusan</a></li>
                <li><a href="/profile">
                    {{Auth()->user()->nama}}
                </a></li>
            </ul>
        </section>

        
            @yield('content')
        </section>

    </section>

    <script>
        // DataTable

        $(document).ready(function () {
            $('#test').DataTable();
        });

        // Modal button for import excel


        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })

        // Date Input Type 

        let startDate = document.getElementById('startDate')
        let endDate = document.getElementById('endDate')

        startDate.addEventListener('change', (e) => {
            let startDateVal = e.target.value
            document.getElementById('startDateSelected').innerText = startDateVal
        })

        endDate.addEventListener('change', (e) => {
            let endDateVal = e.target.value
            document.getElementById('endDateSelected').innerText = endDateVal
        })

    </script>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".fa-bars");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

    </script>
</body>

</html>
