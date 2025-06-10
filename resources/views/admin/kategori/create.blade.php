<x-app-layout>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form Tambah Kategori Buku</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk menambahkan data kategori buku.</p>
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="nama_kategori">Nama Kategori:</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" row="20"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Buat Kategori</button>
                            <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
