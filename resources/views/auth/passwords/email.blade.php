@extends('layouts.login')
@section('content')
    {{-- Forget Password --}}
    <div class="" id="pills-profile">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="row">
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
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"
                            autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- Submit Button --}}
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <button type="submit" class="btn btn-primary btn-submit btn-block py-2 border-0 font-weight-bold">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
