<!DOCTYPE html>
<html>
<head>
    <title>Tambah Alat</title>
</head>
<body>

<h1>Tambah Alat</h1>

<form action="{{ route('alat.store') }}" method="POST">
    @csrf

    <p>
        Nama Alat<br>
        <input type="text" name="nama_alat">
    </p>

    <p>
        Kategori<br>
        <input type="text" name="kategori">
    </p>

    <p>
        Jumlah<br>
        <input type="number" name="jumlah">
    </p>

    <p>
        Kondisi<br>
        <input type="text" name="kondisi">
    </p>

    <button type="submit">Simpan</button>
</form>

</body>
</html>