<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Nisn</th>
            <th>Alamat</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th>No Hp</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Status pernikahan</th>
            <th>Tempat Kerja</th>
            <th>Tempat Kuliah</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Pekerjaan Ayah</th>
            <th>Pekerjaan Ibu</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $row)
        @if($row-> level == 'siswa')
        <tr>
            <td>{{ $row->nama }}</td>
            <td>{{$row->jurusan_table->nama_jurusan}}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->nisn }}</td>
            <td>{{ $row->alamat}}</td>
            <td>{{ $row->angkatan}}</td>
            <td>{{ $row->status}}</td>
            <td>{{ $row->no_hp}}</td>
            <td>{{ $row->tempat_lahir}}</td>
            <td>{{ date('m/d/Y', strtotime($row->tanggal_lahir)) }}</td>
            <td>{{ $row->jenis_kelamin}}</td>
            <td>{{ $row->status_pernikahan}}</td>
            <td>{{ $row->tempat_kerja}}</td>
            <td>{{ $row->tempat_kuliah}}</td>
            <td>{{ $row->nama_ayah}}</td>
            <td>{{ $row->nama_ibu}}</td>
            <td>{{ $row->pekerjaan_ayah}}</td>
            <td>{{ $row->pekerjaan_ibu}}</td>   
        </tr>
        @endif
        @endforeach
    </tbody>
</table>