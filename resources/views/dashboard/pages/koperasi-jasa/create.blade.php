@extends('layouts.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <section id="product-form-create" class="">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Layanan /</span> Form Tambah Layanan
            </h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Form Tambah Layanan</h5> <small class="text-muted float-end">Pastikan anda
                            memasukkan data yang benar</small>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-jasa" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="row mb-3 d-none">
                                <label class="col-sm-2 col-form-label" for="koperasi_id">Id Koperasi</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control @error('koperasi_id') is-invalid @enderror"
                                        id="koperasi_id" placeholder="Id koperasi" name="koperasi_id"
                                        value="{{ $koperasi->id }}" required>
                                    @error('koperasi_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div> --}}
                            {{-- Nama Layanan --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Nama" name="name" value="{{ old('name') }}"
                                        required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- layanan --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="service">Layanan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('service') is-invalid @enderror"
                                        id="service" placeholder="Layanan" name="service" value='{{ old('service') }}'
                                        required>
                                    @error('service')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Kebutuhan --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="needs">Kebutuhan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('needs') is-invalid @enderror"
                                        id="needs" placeholder="Kebutuhan" name="needs" value='{{ old('needs') }}'
                                        required>
                                    @error('needs')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Foto --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="image">Foto Layanan</label>
                                <div class="col-sm-10 d-flex align-items-start align-items-sm-center gap-4 ">
                                    <div class="img-container img-container-sm rounded">
                                        <img src="/img/temp/service-temp.png" alt="user-avatar"
                                            class="img-preview d-block img-fluid img-fit mx-auto d-block"
                                            id="uploadedAvatar">
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload new photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="hidden" name="oldImage" value="{{ old('image') }}">
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
                            {{-- Deskripsi --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                        id="description" placeholder="Deskripsi" name="description"
                                        value="{{ old('description') }}" required>
                                    <trix-editor input="description"></trix-editor>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
