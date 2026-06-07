<h2>Data Peminjaman</h2>

<a href="{{ route('peminjaman.create') }}">Tambah</a>

<table border="1">
    <tr>
        <th>Siswa</th>
        <th>Alat</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Status</th>
    </tr>

    @foreach($peminjaman as $p)
    <tr>
        <td>{{ $p->siswa?->nama_siswa ?? '-' }}</td>
        <td>{{ $p->alat?->nama_alat ?? '-' }}</td>
        <td>{{ $p->tanggal_pinjam }}</td>
        <td>{{ $p->jumlah_pinjam }}</td>
        <td>{{ $p->status }}</td>
    </tr>
    @endforeach
</table>