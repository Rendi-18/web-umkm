@extends('layouts.dashboard')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <section id="pegawai-form-create" class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 py-2 mb-2">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Pegawai</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Edit Pegawai</a>
                    </li>
                    <li class="breadcrumb-item active">Pegawai {{ old('name', $pegawai->name) }}</li>
                </ol>
            </nav>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Form Edit Data Pegawai</h5> <small class="text-muted float-end">Pastikan Data
                            yang
                            anda masukkan sudah benar</small>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/pegawai/{{ $pegawai->id }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="classification">classification</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('classification') is-invalid @enderror"
                                        id="classification" placeholder="classification" name="classification"
                                        value="{{ old('classification', $pegawai->classification) }}" required>
                                    @error('classification')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nip">NIB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nip') is-invalid @enderror"
                                        id="nip" placeholder="NIP" name="nip"
                                        value="{{ old('nip', $pegawai->nip) }}" required>
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nama Pegawai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Nama Pegawai" name="name"
                                        value="{{ old('name', $pegawai->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="position">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('position') is-invalid @enderror"
                                        id="position" placeholder="Jabatan" name="position"
                                        value="{{ old('position', $pegawai->position) }}" required>
                                    @error('position')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Foto Pegawai</label>
                                <div class="col-sm-10 px-3 pl-5">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">

                                        <div class="img-container img-container-sm rounded">
                                            @if ($pegawai->image)
                                                <img src="{{ asset('storage/' . $pegawai->image) }}" alt="user-avatar"
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

                                                <input type="hidden" name="oldImage" value="{{ $pegawai->image }}">
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

                                            <img src="" class="mt-3 img-fluid img-preview" alt="">
                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                        id="description" placeholder="Deskripsi" name="description"
                                        value="{{ old('description', $pegawai->description) }}" required>
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
                                    <button type="submit" class="btn btn-primary "><i class="bx bx-send ms-1"></i>
                                        &nbsp;
                                        Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
