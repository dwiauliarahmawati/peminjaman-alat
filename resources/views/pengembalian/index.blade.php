<!DOCTYPE html>
<html>
<head>
    <title>Data Pengembalian</title>
</head>
<body>

<h1>Data Pengembalian</h1>

<a href="{{ route('pengembalian.create') }}">
    Tambah Pengembalian
</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Siswa</th>
        <th>Alat</th>
        <th>Tanggal Kembali</th>
        <th>Jumlah Kembali</th>
        <th>Kondisi</th>
    </tr>

    @foreach($pengembalian as $p)
    <tr>
        <td>{{ $p->id }}</td>

        <!-- ambil dari relasi -->
        <td>{{ $p->peminjaman->siswa->nama_siswa ?? '-' }}</td>
        <td>{{ $p->peminjaman->alat->nama_alat ?? '-' }}</td>

        <td>{{ $p->tanggal_kembali }}</td>
        <td>{{ $p->jumlah_kembali }}</td>
        <td>{{ $p->kondisi_kembali }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>