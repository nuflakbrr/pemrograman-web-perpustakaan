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
                        <p>Lengkapi formulir berikut untuk menambahkan data peminjaman buku.</p>
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="form-label" for="anggota_id">Anggota:</label>
                                <select class="form-control" id="anggota_id" name="anggota_id">
                                    <option value="">-- Pilih Anggota --</option>
                                    @foreach ($anggota as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="buku_id">Buku:</label>
                                <select class="form-control" id="buku_id" name="buku_id">
                                    <option value="">-- Pilih Buku --</option>
                                    @foreach ($buku as $item)
                                        <option value="{{ $item->id }}">{{ $item->judul_buku }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                                <input type="date" class="form-control" id="tanggal_peminjaman"
                                    name="tanggal_peminjaman">
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-label" for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian"
                                    name="tanggal_pengembalian">
                            </div> --}}
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
