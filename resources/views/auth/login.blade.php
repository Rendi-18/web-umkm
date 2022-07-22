@php
$website = DB::table('websites')->get();
@endphp
@extends('Layouts.login')
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

                <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="Masukkan Email" autofocus="" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    <small>Lupa Password?</small>
                                </a>
                            @endif
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                    </div>
                </form>

                <p class="text-center">
                    <span>Belum memiliki akun?</span>
                    <a href="/register">
                        <span>Buat akun</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
@endsection
