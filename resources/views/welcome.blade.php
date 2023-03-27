<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Alumni</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset ('css/welcome.css')}}">
    <link rel="shortcut icon" href="https://www.smkharapanbangsa.sch.id/image/logo-HB.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

    <a href="/">
        <img src="{{asset ('image/logo/logo.png')}}" class="logo" alt="">
    </a>

    <div class="container align-items-center text-dark h-100 w-100 py-5 d-flex justify-content-center">
        <div class="left ">
            <p class="fs-4 fw-light opacity-75">Selamat Datang di...</p>
            <h1 class="fw-bold my-3">SMK HARAPAN <br> BANGSA</h1>
            <p class="desc fs-4 my-4 opacity-75">ini adalah website sistem informasi alumni dari SMK Harapan Bangsa</p>

            @if (Route::has('login'))
            <div class="d-flex container-button my-4">
                @auth
                <a href="{{ url('/home') }}" class="btn-auth">Home</a>
                @else
                <a href="{{ route('login') }}" class="btn-auth">Login</a>

                <!-- @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn-auth mx-4">Register</a>
                @endif -->
                @endauth
            </div>
            @endif
        </div>
        <div class="right">
            <img src="{{asset ('image/background/bg-gameboy.png')}}" alt="">
        </div>



    </div>
</body>

</html>
