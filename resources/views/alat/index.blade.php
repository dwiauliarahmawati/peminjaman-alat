<!DOCTYPE html>
<html>
<head>
    <title>Data Alat</title>
</head>
<body>

<h1>Data Alat</h1>

<a href="{{ route('alat.create') }}">Tambah Alat</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama Alat</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
    </tr>

    @foreach($alat as $a)
    <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->nama_alat }}</td>
        <td>{{ $a->kategori }}</td>
        <td>{{ $a->jumlah }}</td>
        <td>{{ $a->kondisi }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>