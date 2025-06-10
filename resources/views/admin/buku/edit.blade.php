<x-app-layout>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form Ubah Data Buku</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk mengubah data buku</p>
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label" for="judul_buku">Judul Buku:</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="penulis">Penulis:</label>
                                <input type="text" class="form-control" id="penulis" name="penulis">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="penerbit">Penerbit:</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tahun_penerbitan">Tahun Penerbitan:</label>
                                <input type="number" name="tahun_penerbitan" min="1900" max="2100"
                                    value="1900" id="tahun_penerbitan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="isbn">ISBN:</label>
                                <input type="text" name="isbn" id="isbn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="cover">Cover:</label>
                                <input type="file" accept="image/*" name="Cover" id="cover"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="jumlah_tersedia">Jumlah Tersedia:</label>
                                <input type="number" name="jumlah_tersedia" min="0" value="0"
                                    id="jumlah_tersedia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="kategori_id">Kategori Buku:</label>
                                <select name="kategori_id" id="kategori_id" class="form-select">
                                    <option value="1">Drama</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Buku</button>
                            <a href="{{ route('buku.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
