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
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <div class="container-fluid vh-100 p-0  profile">
                <a href="/profile" class="btn absolute btn-success">
                    <i class="bi bi-caret-left-fill"></i>
                    Back
                </a>
                <div class="col-md-8">
                    <div class="col-md-12 my-3">
                        <form action="{{route('profile.update', Auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Edit Akun</h5>
                                </div>

                                <div class="card-body">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="email">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <input type="email" value="{{$user->email}}" class="form-control" name="email"
                                            placeholder="email" aria-label="email" aria-describedby="email">
                                    </div>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="username">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <input type="text" value="{{$user->username}}" class="form-control"
                                            name="username" placeholder="username" aria-label="username"
                                            aria-describedby="username">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <input type="file" value="{{$user->photo}}" class="form-control" name="photo"
                                            id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                    <div class="card h-fit-content w-fit-content mb-3">
                                        <div class="card-header">Photo</div>
                                        <div class="card-body">
                                            @if($user->photo == null)
                                            <p>Belum Ada</p>
                                            @else
                                            <img src="{{asset ('storage/images/user/'.$user->photo)}}"
                                                class="my-2 rounded border"
                                                style="height:150px;width:150px;object-fit:cover;" alt="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary my-5 col-md-12"> <i class="bi bi-send"></i> Submit</button>
                                </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
