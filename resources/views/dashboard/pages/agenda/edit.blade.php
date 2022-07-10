@extends('layouts.dashboard')

@section('content')
    <div class="content-wrapper ">
        <div class="container-xxl flex-grow-1 container-p-y">
            <section id="edit-agenda">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 py-2 mb-2">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Agenda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Edit Agenda</a>
                        </li>
                        <li class="breadcrumb-item active">Agenda {{ old('name', $agenda->name) }}</li>
                    </ol>
                </nav>
                <div class="row g-4 mb-5">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <form class="" action="/dashboard/agenda/{{ $agenda->id }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            {{-- Name --}}
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="name">Nama Agenda</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text "><i
                                                                class="bx bx-bookmarks"></i></span>
                                                        <input type="text" name="name"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" placeholder="Nama"
                                                            aria-describedby="basic-icon-default-fullname2"
                                                            value="{{ old('name', $agenda->name) }}" required>
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- lokasi --}}
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="lokasi">Lokasi</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                                class="bx bx-map-pin"></i></span>
                                                        <input type="text" name="location" id="location"
                                                            class="form-control phone-mask @error('location') is-invalid @enderror"
                                                            placeholder="Lokasi" aria-label="location"
                                                            aria-describedby="basic-icon-default-phone2"
                                                            value="{{ old('location', $agenda->location) }}" required>
                                                        @error('location')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Tanggal Pelaksanaan --}}
                                            <div class="mb-3 row">
                                                <label for="html5-datetime-local-input"
                                                    class="col-sm-2 col-form-label">Tanggal
                                                    Pelaksanaan</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="date" type="datetime-local"
                                                        value={{ old('date', $agenda->date) }}
                                                        id="html5-datetime-local-input">
                                                    @error('date')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Foto Agenda --}}
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="description">Foto Agenda</label>
                                                <div class="col-sm-10 px-3 pl-5">
                                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                        <div class="img-container img-container-sm rounded">
                                                            @if ($agenda->image)
                                                                <img src="{{ asset('storage/' . $agenda->image) }}"
                                                                    alt="user-avatar"
                                                                    class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                                    id="uploadedAvatar">
                                                            @else
                                                                <img src="/img/portfolio/portfolio-7.jpg" alt="user-avatar"
                                                                    class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                                    id="uploadedAvatar">
                                                            @endif
                                                        </div>

                                                        <div class="button-wrapper">
                                                            <label for="upload" class="btn btn-primary me-2 mb-4"
                                                                tabindex="0">
                                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                                <input type="hidden" name="oldImage" value="">
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
                                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of
                                                                800K
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- Isi --}}
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="description">Isi Agenda</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge flex-column">
                                                        <input type="hidden" name="content" id="content"
                                                            class="form-control phone-mask @error('content') is-invalid @enderror"
                                                            placeholder="Tulis disini isi kegiatan"
                                                            aria-describedby="basic-icon-default-address"
                                                            value="{{ old('content', $agenda->content) }}" required>
                                                        <trix-editor input="content"></trix-editor>
                                                        @error('content')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary"><span
                                                            class='bx bx-mail-send'></span>
                                                        &nbsp;
                                                        Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
@endsection
