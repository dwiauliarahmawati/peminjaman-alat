<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h1>Tambah Siswa</h1>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf


        Nama Siswa<br>
        <input type="text" name="nama_siswa">
    </p>

    <p>
        Kelas<br>
        <input type="text" name="kelas">
    </p>

    <p>
        Jurusan<br>
        <input type="text" name="jurusan">
    </p>

    <button type="submit">Simpan</button>
</form>

</body>
</html>