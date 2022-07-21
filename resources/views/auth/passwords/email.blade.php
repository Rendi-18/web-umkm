@php
$website = DB::table('websites')->get();
@endphp
@extends('layouts.login')
@section('content')
    <div class="authentication-inner col-lg-6 col-12">
        <!-- Register -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">

                            <img src="\img\favicon\icon.svg" alt="">

                        </span>
                        <span class="app-brand-text demo text-body fw-bolder">{{ $website[0]->sitename }}</span>
                    </a>
                </div>
                <h4 class="mb-2">Lupa Password? 🔒</h4>
                <p class="mb-4">Masukkan email anda yang telah terdaftar dan kami akan mengirim anda intruksi untuk
                    mereset
                    password</p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form id="formAuthentication" class="mb-3" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="Enter your email" autofocus=""
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary d-grid w-100">Kirim Reset Link</button>
                </form>
                <div class="text-center">
                    <a href="/login" class="d-flex align-items-center justify-content-center">
                        <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                        Kembali Sign in
                    </a>
                </div>
            </div>
        </div>
        <!-- /Register -->
    </div>
@endsection
