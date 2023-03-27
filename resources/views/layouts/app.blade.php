<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Alumni</title>
    <!-- Style -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.20.2/standard-all/ckeditor.js"></script>

    <link rel="stylesheet" href="{{asset ('css/index.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");

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
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        @include('widget.sidebar', ['jurusan' => $jurusan->all()])
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            @yield('content')
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#test').DataTable();
        });

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })

    </script>
</body>

</html>
