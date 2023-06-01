<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="card">
        <table class="table">
            @foreach($user as $row)
            <tr>
                <th>Nama</th>
                <td>{{ $row->nama }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $row->jurusan_table->nama_jurusan}}</td>
            </tr>
    
            <tr>
                <th>Email
                <td>{{ $row->email }}</td>
                </th>
            </tr>
            <tr>
                <th>Nisn</th>
                <td>{{ $row->nisn }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $row->alamat}}</td>
            </tr>
            <tr>
                <th>Angkatan</th>
                <td>{{ $row->angkatan}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $row->status}}</td>
            </tr>
            <tr>
                <th>No Hp</th>
                <td>{{ $row->no_hp}}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $row->tempat_lahir}}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ date('m/d/Y', strtotime($row->tanggal_lahir)) }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $row->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th>Status pernikahan</th>
                <td>{{ $row->status_pernikahan}}</td>
            </tr>
            <tr>
                <th>Tempat Kerja</th>
                @if($row->tempat_kerja == null)
                <td>Belum Ada</td>
                @else
                <td>{{ $row->tempat_kerja}}</td>
                @endif
            </tr>
            <tr>
                <th>Tempat Kuliah</th>
                @if($row->tempat_kuliah == null)
                <td>Belum Ada</td>
                @else
                <td>{{ $row->tempat_kuliah}}</td>
                @endif
            </tr>
            <tr>
                <th>Nama Ayah</th>
                <td>{{ $row->nama_ayah}}</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <td>{{ $row->nama_ibu}}</td>
            </tr>
            <tr>
                <th>Pekerjaan Ayah</th>
                <td>{{ $row->pekerjaan_ayah}}</td>
            </tr>
            <tr>
                <th>Pekerjaan Ibu</th>
                <td>{{ $row->pekerjaan_ibu}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>

</html>
