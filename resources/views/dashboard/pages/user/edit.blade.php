@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <section id="account-setting">
                <nav aria-label="breadcrumb" class="fw-bold py-1 mb-4">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Account Setting</a>
                        </li>
                        <li class="breadcrumb-item active">Account </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <h5 class="card-header py-3">Profile Details</h5>
                            <!-- Account -->
                            <form id="formAccountSettings" action="/dashboard/user/{{ $user->id }}" method="POST"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="card-body py-3">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4 ">
                                        {{-- Image --}}
                                        <div class="img-container img-container-sm rounded-circle">
                                            @if ($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}" alt="user-avatar"
                                                    class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                    id="uploadedAvatar">
                                            @else
                                                <img src="/img/avatars/blank_avatars.png" alt="user-avatar"
                                                    class="img-preview d-block img-fluid img-fit mx-auto d-block"
                                                    id="uploadedAvatar">
                                            @endif
                                        </div>

                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                                <input type="file" id="upload"
                                                    class="account-file-input @error('image') is-invalid @enderror"
                                                    accept="image/png, image/jpeg" name="image" hidden
                                                    onchange="previewImageUmkm()">
                                                @error('image')
                                                    <div class="invalid-feedback text-light">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </label>
                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="card-body">

                                    <div class="row">
                                        {{-- Username --}}
                                        <div class="mb-3 col-md-6">
                                            <label for="username" class="form-label">User Name</label>
                                            <input class="form-control @error('username') is-invalid @enderror"
                                                type="text" id="username" name="username"
                                                value="{{ old('username', $user->username) }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        {{-- Name --}}
                                        <div class="mb-3 col-md-6">
                                            <label for="name" class="form-label">Name</label>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                id="name" name="name" value="{{ old('name', $user->name) }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        {{-- Email --}}
                                        <div class="mb-3 col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                                id="email" name="email" value="{{ old('email', $user->email) }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        {{-- Phonenumber --}}
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">(+62)</span>
                                                <input class="form-control @error('phonenumber') is-invalid @enderror"
                                                    type="number" id="phonenumber" name="phonenumber"
                                                    value="{{ old('phonenumber', $user->phonenumber) }}">
                                                @error('phonenumber')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Address --}}
                                        <div class="mb-3 col-md-6">
                                            <label for="address" class="form-label">Address</label>
                                            <input class="form-control @error('address') is-invalid @enderror"
                                                type="text" id="address" name="address"
                                                value="{{ old('address', $user->address) }}">
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2"><i
                                                    class="tf-icons bx bx-save"></i> changes</button>
                                            {{-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->

                        {{-- Delete Account --}}
                        <div class="card">
                            <h5 class="card-header">Delete Account</h5>
                            <div class="card-body">
                                <div class="mb-3 col-12 mb-0">
                                    <div class="alert alert-warning">
                                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your
                                            account?
                                        </h6>
                                        <p class="mb-0">Once you delete your account, there is no going back. Please be
                                            certain.</p>
                                    </div>
                                </div>
                                <form id="formAccountDeactivation" action="/dashboard/profile" method="post">
                                    @method('delete')
                                    @csrf
                                    {{-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation">
                                <label class="form-check-label" for="accountActivation">I confirm my account
                                    deactivation</label>
                            </div> --}}
                                    <button type="submit" onclick="return confirm('Apa anda yakin?')"
                                        class="btn
                                btn-danger deactivate-account">Deactivate
                                        Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>
        <!-- / Content -->
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
