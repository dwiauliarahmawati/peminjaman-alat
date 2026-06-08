<h2>Tambah Peminjaman</h2>

<form method="POST" action="{{ route('peminjaman.store') }}">
    @csrf

    <!-- SISWA -->
    <div>
        <label>Nama Siswa</label><br>
        <select name="siswa_id" required>
            <option value="">-- pilih siswa --</option>

            @foreach($siswa as $s)
                <option value="{{ $s->id }}">
                    {{ $s->nama_siswa }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <!-- ALAT -->
    <div>
        <label>Nama Alat</label><br>
        <select name="alat_id" required>
            <option value="">Pilih alat</option>

            @foreach($alat as $a)
                <option value="{{ $a->id }}">
                    {{ $a->nama_alat }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <!-- TANGGAL -->
    <div>
        <label>Tanggal Pinjam</label><br>
        <input type="date" name="tanggal_pinjam" required>
    </div>

    <br>

    <!-- JUMLAH -->
    <div>
        <label>Jumlah Pinjam</label><br>
        <input type="number" name="jumlah_pinjam" min="1" required>
    </div>

    <br>

    <!-- STATUS -->
    <div>
        <label>Status</label><br>
        <input type="text" name="status" placeholder="isi manual: dipinjam / dikembalikan">
    </div>

    <br>

    <button type="submit">Simpan</button>
</form>