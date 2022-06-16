@extends('Layouts.login')
@section('content')
    <!-- LOGIN -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        @if (session()->has('LoginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('LoginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">

                <!-- Email Address -->
                <div class=" col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address"
                            class="form-control bg-white border-0 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus">
                        {{-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}
                    </div>
                </div>

                <!-- Password -->
                <div class="col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password"
                            class="form-control bg-white border-0 @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password"">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <button type="submit" class="btn btn-submit btn-primary btn-block py-2 border-0 font-weight-bold">
                        Login
                    </button>

                </div>
            </div>
        </form>
        <!-- Dont have an account -->
        <div class="text-center w-100 d-flex justify-content-between mt-3">
            <p class="text-muted font-weight-bold">Dont have an account?
                <a class="text-primary ml-2 btr" href="/register" id="pills-profile-tab">Register
                </a>
            </p>
            <p class="text-muted font-weight-bold">
                @if (Route::has('password.request'))
                    <a class="text-primary ml-2 btr" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </p>
        </div>
    </div>
@endsection
