<x-app-layout>
    <div class="py-0 conatiner-fluid content-inner mt-n5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form Ubah Kategori Buku</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk mengubah data kategori buku.</p>
                        <form action="{{ route('kategori.update', $kategoriBuku->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label" for="nama_kategori">Nama Kategori:</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                    value="{{ $kategoriBuku->nama_kategori }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" row="20">{{ $kategoriBuku->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Kategori</button>
                            <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
