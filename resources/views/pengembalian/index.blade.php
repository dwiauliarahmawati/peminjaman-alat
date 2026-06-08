<h2>Data Pengembalian</h2>

<a href="{{ route('pengembalian.create') }}">Tambah Pengembalian</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Siswa</th>
        <th>Alat</th>
        <th>Tanggal Kembali</th>
        <th>Jumlah Kembali</th>
        <th>Kondisi</th>
        <th>Aksi</th>
    </tr>

    @foreach($pengembalian as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->peminjaman->siswa->nama_siswa ?? '-' }}</td>
        <td>{{ $p->peminjaman->alat->nama_alat ?? '-' }}</td>
        <td>{{ $p->tanggal_kembali }}</td>
        <td>{{ $p->jumlah_kembali }}</td>
        <td>{{ $p->kondisi_kembali }}</td>

        <td>
            <a href="{{ route('pengembalian.edit', $p->id) }}">Edit</a>

            <form action="{{ route('pengembalian.destroy', $p->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus data?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>