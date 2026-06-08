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
       
        <th>Nama Alat</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Aksi</th>
    </tr>

    @foreach($alat as $a)
    <tr>
        
    
        <td>{{ $a->nama_alat }}</td>
        <td>{{ $a->kategori }}</td>
        <td>{{ $a->jumlah }}</td>
        <td>{{ $a->kondisi }}</td>
        <td>
            <!-- EDIT -->
            <a href="{{ route('alat.edit', $a->id) }}">Edit</a>

            <!-- DELETE -->
            <form action="{{ route('alat.destroy', $a->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>