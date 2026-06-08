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
        <th>Aksi</th>
    </tr>

    @foreach($siswa as $s)
    <tr>
        <td>{{ $s->nama_siswa }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->jurusan }}</td>
        <td>
            <!-- EDIT -->
            <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>

            <!-- DELETE -->
            <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>