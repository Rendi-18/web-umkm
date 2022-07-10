@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <section id="identity">
                    <h4 class="col-6 fw-bold py-3 mb-2">Website Setting</h4>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Identitas Situs</h5>
                                <form action="/dashboard/website/{{ $website[0]->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="siteicon" class="form-label">Icon </label>
                                            <div id="siteicon"
                                                class="d-flex align-items-start align-items-sm-center gap-4 mb-3">
                                                {{-- Image --}}
                                                <div class="img-container img-container-sm rounded">
                                                    @if ($website[0]->image)
                                                        <img src="{{ asset('storage/' . $website[0]->image) }}"
                                                            alt="user-avatar"
                                                            class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                            id="uploadedAvatar">
                                                    @else
                                                        <img src="/img/favicon/icon.svg" alt="user-avatar"
                                                            class="img-preview d-block img-fluid img-fit mx-auto d-block logo"
                                                            id="uploadedAvatar">
                                                    @endif
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
                                                    type="text" id="sitename" name="sitename"
                                                    value="{{ old('sitename', $website[0]->sitename) }}">
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
                                                    type="text" id="longsitename" name="longsitename"
                                                    value="{{ old('longsitename', $website[0]->longsitename) }}">
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
                                                    type="text" id="title" name="title"
                                                    value="{{ old('title', $website[0]->title) }}">
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
                                                    type="email" id="email" name="email"
                                                    value="{{ old('email', $website[0]->email) }}">
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
                                                        type="text" id="phonenumber" name="phonenumber"
                                                        value="{{ old('phonenumber', $website[0]->phonenumber) }}">
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
                                                    value="{{ old('address', $website[0]->address) }}">
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
                                                    type="text" id="map" name="map"
                                                    value="{{ old('map', $website[0]->map) }}">
                                                @error('map')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            {{-- Link Frame Map --}}
                                            <div class="mb-3 col-md-6">
                                                <label for="iframe" class="form-label">Link IFrame Map</label>
                                                <input class="form-control @error('iframe') is-invalid @enderror"
                                                    type="text" id="iframe" name="iframe"
                                                    value="{{ old('map', $website[0]->iframe) }}">
                                                <div class="form-text"> Salin link embed iframe dari google maps</div>
                                                @error('iframe')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>



                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2"> <i
                                                        class="bx bx-save"></i> Save
                                                    changes</button>
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
