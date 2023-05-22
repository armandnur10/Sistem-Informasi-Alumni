<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="h-screen flex-grow-1 overflow-y-lg-auto vh-100">
            <a href="/siswa" class="btn absolute btn-success">
                <i class="bi bi-caret-left-fill"></i>
                Back
            </a>
            <div class="container-fluid   jurusan  p-0  profile">

                <div class="card col-md-8">
                    <div class="card-header">
                        Tambahkan Skill
                    </div>
                    <div class="card-body">

                        <form action="{{route('profile.update', Auth()->user()->id)}}" class="col-md-12" method="post">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="input-group mb-3" id="skills-container">
                                <span class="input-group-text" id="skill">+</span>
                                <input type="text" class="form-control" name="skill[]" placeholder="Skill"
                                    aria-label="skill" aria-describedby="skill" required>
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
                            </div>
                        </form>

                        <div class="card shadow border mb-7">
                            <div class="card-header">
                                <h5 class="mb-0">List Skill</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Nama Skill</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(Auth()->user()->skill == null)
                                        <tr>
                                            <td>Belum ada</td>
                                        </tr>
                                        @else
                                        @foreach (Auth()->user()->skill as $row)
                                        <tr>
                                            <td class="fw-bold ">{{ $row }}</td>
                                            <td class="action">
                                                test
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
