<h2>Data Peminjaman</h2>

<a href="{{ route('peminjaman.create') }}">Tambah</a>

<table border="1">
    <tr>
        <th>Siswa</th>
        <th>Alat</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach($peminjaman as $p)
    <tr>
        <td>{{ $p->siswa?->nama_siswa ?? '-' }}</td>
        <td>{{ $p->alat?->nama_alat ?? '-' }}</td>
        <td>{{ $p->tanggal_pinjam }}</td>
        <td>{{ $p->jumlah_pinjam }}</td>
        <td>{{ $p->status }}</td>
        <td>
            <!-- EDIT -->
            <a href="{{ route('peminjaman.edit', $p->id) }}">Edit</a>

            <!-- DELETE -->
            <form action="{{ route('peminjaman.destroy', $p->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>