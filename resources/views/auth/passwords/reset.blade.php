@extends('layouts.login')

@section('content')
    {{-- Reset Password --}}
    <div class="" id="pills-profile">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <div class="row">

                {{-- Tokken --}}
                <input type="hidden" name="token" value="{{ $token }}">

                {{-- Email Address --}}
                <div class="col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email"
                            class="form-control bg-white border-0 @error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Password --}}
                <div class="col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password"
                            class="form-control bg-white border-0 @error('password') is-invalid @enderror" name="password"
                            required autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Confirm Password --}}
                <div class="col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control bg-white border-0"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm Password">
                    </div>
                </div>

                {{-- Submit Button --}}
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <button type="submit" class="btn btn-primary btn-submit btn-block py-2 border-0 font-weight-bold">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
