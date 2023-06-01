<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>

    <script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>

    <!-------- Bootstrap -------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-------- Local -------->
    <link rel="shortcut icon" href="https://www.smkharapanbangsa.sch.id/image/logo-HB.png">
    <link rel="stylesheet" href="https://unpkg.com/@webpixels/css@1.1.5/dist/index.css">
    <link rel="stylesheet" href="{{asset ('css/index.css')}}">
    <link rel="stylesheet" href="{{asset ('css/navbar.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style>
      
      @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
    </style>

</head>

<body>

  <section class="navbar" id="navbar">
    <div class="logo">Harapan Bangsa</div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
    </label>
    <ul class="menu-list">
        <li><a href="/siswa">Data Saya</a></li>
        <li><a href="/home">Info Sekolah</a></li>
        <li><a href="#achievement">Achievement</a></li>
    </ul>
   
  </section>
  
    @yield('content')
    </div>
    <script>
        const hideButton = document.getElementById('btn-hide');
        hideButton.addEventListener('click', () => {
            const elementsToHide = document.querySelectorAll('.text-title');
            elementsToHide.forEach((element) => {
                if (hideButton.classList.contains('hidden')) {
                    hideButton.classList.remove('hidden');
                    element.classList.remove('hidden');
                } else {
                    hideButton.classList.add('hidden');
                    element.classList.add('hidden');
                }
            });
        });

    </script>
</body>

</html>
