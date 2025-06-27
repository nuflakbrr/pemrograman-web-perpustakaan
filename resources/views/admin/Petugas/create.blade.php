<x-app-layout>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form Tambah Petugas</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk menambahkan Data Petugas.</p>
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="nama_petugas">Nama Petugas:</label>
                                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="deskripsi">Nomer Telepon:</label>
                                <input type="tel" name="nomer_telepon" class="form-control" pattern="[0-15] {10-15}" title="nomer terdiri dari 10-15" placeholder="08123456789" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="posisi">Posisi:</label>
                                <select class="form-control" id="posisi" name="posisi">
                                <option value="">-- Pilih Posisi --</option>
                                <option value="dipinjam">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <button type="submit" class="btn btn-primary">Buat Data Petugas</button>
                            <a href="{{ route('petugas.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
