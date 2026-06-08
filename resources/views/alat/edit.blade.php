<!DOCTYPE html>
<html>
<head>
    <title>Edit Alat</title>
</head>
<body>

<h1>Edit Alat</h1>

<form action="{{ route('alat.update', $alat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Alat</label><br>
    <input type="text" name="nama_alat" value="{{ $alat->nama_alat }}">
    <br><br>

    <label>Kategori</label><br>
    <input type="text" name="kategori" value="{{ $alat->kategori }}">
    <br><br>

    <label>Jumlah</label><br>
    <input type="number" name="jumlah" value="{{ $alat->jumlah }}">
    <br><br>

    <label>Kondisi</label><br>
    <input type="text" name="kondisi" value="{{ $alat->kondisi }}">
    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>