@php
$website = DB::table('websites')->get();
@endphp
@extends('Layouts.login')
@section('content')
    <div class="authentication-inner col-lg-8 col-12">
        <!-- Register -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="/" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">

                            <img src="img\favicon\icon.svg" alt="">

                        </span>
                        <span class="app-brand-text demo text-body fw-bolder">{{ $website[0]->sitename }}</span>
                    </a>
                </div>
                <h4 class="mb-2">Mulai kelola Koperasi UMKM anda 🚀</h4>
                <p class="mb-4">Kelola data dan perizinan lebih mudah!</p>

                <form id="formAuthentication" class="mb-3 row" action="/register" method="POST">
                    @csrf
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            name="username" placeholder="Masukkan username" autofocus="" value="{{ old('username') }}"
                            required autocomplete="username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Masukkan name" autofocus="" value="{{ old('name') }}" required
                            autocomplete="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="Enter your email" value="{{ old('email') }}" required
                            autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="phonenumber" class="form-label">No. Telp</label>
                        <input type="number" class="form-control @error('phonenumber') is-invalid @enderror"
                            id="phonenumber" name="phonenumber" placeholder="Enter your phonenumber"
                            value="{{ old('phonenumber') }}" required autocomplete="phonenumber">
                        @error('phonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-password-toggle col-lg-6 col-12">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="············" aria-describedby="password" value="{{ old('password') }}"
                                required autocomplete="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-password-toggle col-lg-6 col-12">
                        <label class="form-label" for="password">Konfirmasi Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                                placeholder="············" aria-describedby="password" value="{{ old('password') }}"
                                required autocomplete="new-password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>

                    <button class="btn btn-primary d-grid w-100">
                        Sign up
                    </button>
                </form>

                <p class="text-center">
                    <span>Sudah Memiliki akun?</span>
                    <a href="/login">
                        <span>Sign in</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
@endsection
