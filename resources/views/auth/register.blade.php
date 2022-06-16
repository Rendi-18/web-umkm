@extends('Layouts.login')
@section('content')
    <!-- REGISTRASION -->
    <div class="" id="pills-profile">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">

                <!-- Username -->
                <div class="col-lg-6 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="username" type="text" name="username" placeholder="Username"
                            class="border-0 form-control bg-white border-0 @error('username') is-invalid @enderror"
                            value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Name -->
                <div class=" col-lg-6 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class=" input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="name" type="text" name="name" placeholder="Name"
                            class="border-0 form-control bg-white border-0 @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Email Address -->
                <div class=" col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="email" placeholder="Email Address"
                            class="border-0 form-control bg-white border-0 @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="col-lg-12 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                        </div>

                        <input id="phonenumber" type="number" name="phonenumber" placeholder="Phone Number"
                            class="border-0 form-control bg-white border-0 @error('phonenumber') is-invalid @enderror"
                            value="{{ old('phonenumber') }}" required autocomplete="phonenumber">

                        @error('phonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="input-group col-lg-6 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password"
                            class="border-0 form-control bg-white border-0 @error('password') is-invalid @enderror"
                            value="{{ old('password') }}" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <!-- Password Confirmation -->
                <div class="input-group col-lg-6 mb-4">
                    <div class="shadow-in-log input-group">
                        <div class="bx_ic input-group-prepend">
                            <span class="input-group-text bg-white px-4  border-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password-confirm" type="password" name="password_confirmation"
                            placeholder="Confirm Password" class="form-control bg-white border-0" required
                            autocomplete="new-password">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <button type="submit" class="btn btn-primary btn-submit btn-block py-2 border-0 font-weight-bold">
                        Register
                    </button>
                </div>

                <!-- Already Registered -->
                <div class="text-center w-100 mt-3">
                    <p class="text-muted font-weight-bold">Already Registered?
                        <a class="text-primary ml-2 btl" id="pills-home-tab" href="/login">Login</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
@endsection
