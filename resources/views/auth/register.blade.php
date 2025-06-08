<x-guest-layout>
    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                    <img src="{{ asset('assets/images/auth/05.png') }}" class="img-fluid gradient-main animated-scaleX"
                        alt="images">
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                                <div class="card-body">
                                    <a href="#" class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <div class="logo-main">
                                            <div class="logo-normal">
                                                <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="-0.757324" y="19.2427" width="28" height="4"
                                                        rx="2" transform="rotate(-45 -0.757324 19.2427)"
                                                        fill="currentColor" />
                                                    <rect x="7.72803" y="27.728" width="28" height="4"
                                                        rx="2" transform="rotate(-45 7.72803 27.728)"
                                                        fill="currentColor" />
                                                    <rect x="10.5366" y="16.3945" width="16" height="4"
                                                        rx="2" transform="rotate(45 10.5366 16.3945)"
                                                        fill="currentColor" />
                                                    <rect x="10.5562" y="-0.556152" width="28" height="4"
                                                        rx="2" transform="rotate(45 10.5562 -0.556152)"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                            <div class="logo-mini">
                                                <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="-0.757324" y="19.2427" width="28" height="4"
                                                        rx="2" transform="rotate(-45 -0.757324 19.2427)"
                                                        fill="currentColor" />
                                                    <rect x="7.72803" y="27.728" width="28" height="4"
                                                        rx="2" transform="rotate(-45 7.72803 27.728)"
                                                        fill="currentColor" />
                                                    <rect x="10.5366" y="16.3945" width="16" height="4"
                                                        rx="2" transform="rotate(45 10.5366 16.3945)"
                                                        fill="currentColor" />
                                                    <rect x="10.5562" y="-0.556152" width="28" height="4"
                                                        rx="2" transform="rotate(45 10.5562 -0.556152)"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                        <!--logo End-->

                                        <h4 class="logo-title ms-3">Hope UI</h4>
                                    </a>

                                    <h2 class="mb-2 text-center">Sign Up</h2>
                                    <p class="text-center">Create your Hope UI account.</p>

                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama_petugas" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_petugas"
                                                        name="nama_petugas" value="{{ old('nama_petugas') }}">
                                                    @error('nama_petugas')
                                                        <p class="pt-1 text-xs text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" value="{{ old('email') }}"
                                                        placeholder="your@mail.com">
                                                    @error('email')
                                                        <p class="pt-1 text-xs text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nomor_telepon" class="form-label">No. Telepon</label>
                                                    <input type="text" class="form-control" id="nomor_telepon"
                                                        name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                                                    @error('nomor_telepon')
                                                        <p class="pt-1 text-xs text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="position" class="form-label">Jabatan</label>
                                                    <input type="text" class="form-control" id="position"
                                                        name="position" value="{{ old('position') }}">
                                                    @error('position')
                                                        <p class="pt-1 text-xs text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password">
                                                    @error('password')
                                                        <p class="pt-1 text-xs text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="password_confirmation" class="form-label">Konfirmasi
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        id="password_confirmation" name="password_confirmation">
                                                    @error('password_confirmation')
                                                        <p class="pt-1 text-xs text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-bg sign-bg-right">
                        <svg width="280" height="230" viewBox="0 0 421 359" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.05">
                                <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8" />
                                <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 149.47 319.328)" fill="#3A57E8" />
                                <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857"
                                    transform="rotate(45 203.936 99.543)" fill="#3A57E8" />
                                <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(45 204.316 -229.172)" fill="#3A57E8" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
