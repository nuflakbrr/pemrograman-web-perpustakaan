<x-app-layout>
    <div class="py-0 conatiner-fluid content-inner mt-n5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Form Tambah Data Buku</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lengkapi formulir berikut untuk menambahkan data buku.</p>
                        <form enctype="multipart/form-data" action="{{ route('buku.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="form-label" for="judul_buku">Judul Buku:</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                                @error('judul_buku')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="penulis">Penulis:</label>
                                <input type="text" class="form-control" id="penulis" name="penulis">
                                @error('penulis')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="penerbit">Penerbit:</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit">
                                @error('penerbit')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tahun_penerbitan">Tahun Penerbitan:</label>
                                <input type="number" name="tahun_penerbitan" min="1900" max="2100"
                                    value="1900" id="tahun_penerbitan" class="form-control">
                                @error('tahun_penerbitan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="isbn">ISBN:</label>
                                <input type="text" name="isbn" id="isbn" class="form-control">
                                @error('isbn')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="cover">Cover:</label>
                                <input type="file" accept="image/*" name="cover" id="cover"
                                    class="form-control">
                                @error('Cover')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="jumlah_tersedia">Jumlah Tersedia:</label>
                                <input type="number" name="jumlah_tersedia" min="0" value="0"
                                    id="jumlah_tersedia" class="form-control">
                                @error('jumlah_tersedia')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="kategori_id">Kategori Buku:</label>
                                <select name="kategori_id" id="kategori_id" class="form-select">
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
