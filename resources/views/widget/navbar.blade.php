<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset ('css/navbar.css')}}">
</head>

<body>
    <section class="navbar border" id="navbar">
        <div class="logo">Harapan Bangsa</div>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
            <div class='menu-button'></div>
        </label>
        <ul class="menu-list">
            <li><a href="/siswa">Data Saya</a></li>
            <li><a href="/home">Info Sekolah</a></li>
            <li><a href="/profile">{{Auth()->user()->nama}}</a></li>
            <li >
                <a class="no-hover" href="#"
                    onclick="confirmLogout()">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </section>

    <script>
    function confirmLogout() {
        if (confirm('Apakah Anda yakin ingin logout?')) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    }
</script>

</body>


</html>
