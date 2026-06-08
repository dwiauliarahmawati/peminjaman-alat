<h2>Edit Pengembalian</h2>

<form action="{{ route('pengembalian.update', $pengembalian->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Peminjaman</label><br>
    <select name="peminjaman_id">
        @foreach($peminjaman as $p)
            <option value="{{ $p->id }}"
                {{ $pengembalian->peminjaman_id == $p->id ? 'selected' : '' }}>
                {{ $p->siswa->nama_siswa ?? '-' }} -
                {{ $p->alat->nama_alat ?? '-' }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Tanggal Kembali</label><br>
    <input type="date"
           name="tanggal_kembali"
           value="{{ $pengembalian->tanggal_kembali }}">

    <br><br>

    <label>Jumlah Kembali</label><br>
    <input type="number"
           name="jumlah_kembali"
           value="{{ $pengembalian->jumlah_kembali }}">

    <br><br>

    <label>Kondisi Kembali</label><br>
    <input type="text"
           name="kondisi_kembali"
           value="{{ $pengembalian->kondisi_kembali }}">

    <br><br>

    <button type="submit">Update</button>
</form>