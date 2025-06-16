<x-app-layout>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form Tambah Data Anggota</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk menambahkan data anggota.</p>

                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label" for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat:</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="nomor_telepon">Nomor Telepon:</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Anggota</button>
                            <a href="{{ route('anggota.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
