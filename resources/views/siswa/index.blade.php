<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h1>Data Siswa</h1>

<a href="{{ route('siswa.create') }}">Tambah Siswa</a>

<table border="1">
    <tr>
       
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </tr>

    @foreach($siswa as $s)
    <tr>
        <td>{{ $s->nama_siswa }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->jurusan }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>