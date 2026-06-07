<h2>Tambah Pengembalian</h2>

<form method="POST" action="{{ route('pengembalian.store') }}">
    @csrf

    <!-- PILIH PEMINJAMAN -->
    <label>Peminjaman</label><br>
    <select name="peminjaman_id" required>
        <option value="">-- pilih peminjaman --</option>

        @foreach($peminjaman as $p)
            <option value="{{ $p->id }}">
                {{ $p->siswa->nama_siswa ?? '-' }} - {{ $p->alat->nama_alat ?? '-' }}
            </option>
        @endforeach
    </select>

    <br><br>

    <!-- TANGGAL KEMBALI -->
    <label>Tanggal Kembali</label><br>
    <input type="date" name="tanggal_kembali" required>

    <br><br>

    <!-- JUMLAH KEMBALI -->
    <label>Jumlah Kembali</label><br>
    <input type="number" name="jumlah_kembali" required>

    <br><br>

    <!-- KONDISI -->
    <label>Kondisi Kembali</label><br>
    <input type="text" name="kondisi_kembali" placeholder="baik / rusak / hilang">

    <br><br>

    <button type="submit">Simpan Pengembalian</button>
</form>