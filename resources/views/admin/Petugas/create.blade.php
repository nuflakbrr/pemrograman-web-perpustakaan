<x-app-layout>
    <div class="py-0 conatiner-fluid content-inner mt-n5">
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
                        <form action="{{ route('petugas.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="form-label" for="nama_petugas">Nama Petugas:</label>
                                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
                                @error('nama_petugas')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nomor_telepon">Nomer Telepon:</label>
                                <input type="tel" name="nomor_telepon" id="nomor_telepon" class="form-control"
                                    pattern="[0-15] {10-15}" title="nomer terdiri dari 10-15" placeholder="08123456789"
                                    required>
                                @error('nomor_telepon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="position">Posisi:</label>
                                <select class="form-control" id="position" name="position">
                                    <option value="">-- Pilih Posisi --</option>
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                </select>
                                @error('position')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
