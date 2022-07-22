@php
$website = DB::table('websites')->get();
@endphp
@extends('layouts.login')

@section('content')
    <div class="authentication-inner auth-ex">
        <!-- Register -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">

                            <img src="img\favicon\icon.svg" alt="">

                        </span>
                        <span class="app-brand-text demo text-body fw-bolder">{{ $website[0]->sitename }}</span>
                    </a>
                </div>
                @if (session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!-- /Logo -->

                <h4 class="mb-2">Selamat datang di <strong>{{ $website[0]->sitename }}</strong> 👋</h4>
                <p class="mb-4">Silahkan Masuk dengan akun Anda</p>

                <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    {{-- Tokken --}}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="Masukkan Email" autofocus="" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                    </div>
                    <div class="mb-3 form-password-toggle">
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
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Konfirmasi Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                                placeholder="············" aria-describedby="password"
                                value="{{ $email ?? old('email') }}" required autocomplete="new-password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
