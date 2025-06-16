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

                        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-label" for="nama">Nama:</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat:</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="nomor_telepon">Nomor Telepon:</label>
                                <input type="text" class="form-control @error('nomor_telepon') is-invalid @enderror"
                                    id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                                @error('nomor_telepon')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
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
