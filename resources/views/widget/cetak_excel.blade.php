<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Angkatan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $row)
        @if($row-> level == 'siswa')
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{$row->jurusan->nama_jurusan}}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->alamat}}</td>
            <td>{{ $row->angkatan}}</td>
            <td>{{ $row->status}}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
