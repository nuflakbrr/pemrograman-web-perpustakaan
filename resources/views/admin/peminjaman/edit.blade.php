<x-app-layout>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Ubah Data Peminjaman</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk mengubah data peminjaman buku.</p>
                        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label" for="anggota_id">Anggota:</label>
                                <input type="text" class="form-control" id="anggota_id" name="anggota_id"
                                    value="{{ $peminjaman->anggota->nama }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="buku_id">Buku:</label>
                                <input type="text" class="form-control" id="buku_id" name="buku_id"
                                    value="{{ $peminjaman->buku->judul_buku }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="petugas_id">Petugas:</label>
                                <input type="text" class="form-control" id="petugas_id" name="petugas_id"
                                    value="{{ $peminjaman->user->nama_petugas }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                                <input type="date" class="form-control" id="tanggal_peminjaman"
                                    name="tanggal_peminjaman" value="{{ $peminjaman->tanggal_peminjaman }}" disabled>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_peminjaman">Tanggal Pengembalian:</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian"
                                    name="tanggal_pengembalian">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="status">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="dipinjam">Dipinjam</option>
                                    <option value="dikembalikan">Dikembalikan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Data Peminjaman</button>
                            <a href="{{ route('peminjaman.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
