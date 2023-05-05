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

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>

<body>
    <div class="d-flex flex-column flex-lg-row h-lg-full">
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            @yield('content')
        </div>
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
