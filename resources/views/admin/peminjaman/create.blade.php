<x-app-layout>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Data Peminjaman Buku</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>List Data Peminjaman Buku.</p>
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                                <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_peminjaman">Tanggal Pengembalian:</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian">
                            </div>
                          <div class="form-group">
                                <label class="form-label" for="status">Status:</label>
                                <select class="form-control" id="status" name="status">
                                <option value="">-- Pilih Status --</option>
                                <option value="dipinjam">Dipinjam</option>
                                <option value="dikembalikan">Dikembalikan</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Buat Data Peminjaman</button>
                            <a href="{{ route('peminjaman.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
