@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">


                <section id="identity">
                    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Koperasi/</span> Profile</h4> --}}

                    <div aria-label="breadcrumb" class="g-2 mb-2">
                        <ol class="breadcrumb breadcrumb-style2 mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">Website </li>
                            <li class="breadcrumb-item active">Website Setting</li>
                        </ol>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Identitas Situs</h5>
                                <form action="">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="siteicon" class="form-label">Icon </label>
                                            <div id="siteicon"
                                                class="d-flex align-items-start align-items-sm-center gap-4 mb-3">
                                                {{-- Image --}}
                                                <div class="img-container img-container-sm rounded">
                                                    {{-- @if ($user->image)
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="user-avatar"
                                        class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                        id="uploadedAvatar">
                                @else --}}
                                                    <img src="/img/favicon/icon.svg" alt="user-avatar"
                                                        class="img-preview d-block img-fluid img-fit mx-auto d-block logo"
                                                        id="uploadedAvatar">
                                                    {{-- @endif --}}
                                                </div>

                                                <div class="button-wrapper">
                                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                        <span class="d-none d-sm-block">Upload new logo</span>
                                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                                        <input type="hidden" name="oldImage" value="">
                                                        <input type="file" id="upload"
                                                            class="account-file-input @error('image') is-invalid @enderror"
                                                            accept="svg" name="image" hidden
                                                            onchange="previewImageUmkm()">
                                                        @error('image')
                                                            <div class="invalid-feedback text-light">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </label>
                                                    <p class="text-muted mb-0">Allowed .svg only</p>
                                                </div>
                                            </div>


                                            {{-- SiteName --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="sitename" class="form-label">Nama Situs</label>
                                                <input class="form-control @error('sitename') is-invalid @enderror"
                                                    type="text" id="sitename" name="sitename" value="">
                                                @error('sitename')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- Long SiteName --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="longsitename" class="form-label">Nama Panjang Situs</label>
                                                <input class="form-control @error('longsitename') is-invalid @enderror"
                                                    type="text" id="longsitename" name="longsitename" value="">
                                                @error('longsitename')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- Title --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="title" class="form-label">title</label>
                                                <input class="form-control @error('title') is-invalid @enderror"
                                                    type="text" id="title" name="title" value="">
                                                @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <hr>

                                            {{-- Email --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="email" id="email" name="email" value="">
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
                                                        type="text" id="phonenumber" name="phonenumber" value="">
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
                                                    type="text" id="address" name="address" value="">
                                                @error('address')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- Link Map --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="map" class="form-label">Link Map</label>
                                                <input class="form-control @error('map') is-invalid @enderror"
                                                    type="text" id="map" name="map" value="">
                                                @error('map')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- Link Frame Map --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="Iframe" class="form-label">Link IFrame Map</label>
                                                <input class="form-control @error('Iframe') is-invalid @enderror"
                                                    type="text" id="Iframe" name="Iframe" value="">
                                                <div class="form-text"> You can use letters, numbers &amp; periods </div>
                                                @error('Iframe')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>



                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                                {{-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> --}}
                                            </div>
                                        </div>

                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                </section>

                <section id="">

                </section>
            </div>
        </div>
        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>


    <!-- Content wrapper -->
@endsection
