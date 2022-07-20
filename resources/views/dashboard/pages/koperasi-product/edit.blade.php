@extends('layouts.dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <section id="product-form-create" class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style2 py-3 mb-4">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Koperasi</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/dashboard/koperasi-product/{{ $product->id }}">Product</a>
                    </li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Form Edit Product</h5> <small class="text-muted float-end">Default
                            label</small>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/koperasi-product/{{ $product->id }}" method="POST"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="name">Nama Product</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Harga" name="name"
                                        value="{{ old('name', $product->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="price">Harga</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        id="price" placeholder="Harga" name="price"
                                        value="{{ old('price', $product->price) }}" required>
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="weight">Berat</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('weight') is-invalid @enderror"
                                        id="weight" placeholder="Berat" name="weight"
                                        value="{{ old('weight', $product->weight) }}" required>
                                    @error('weight')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="image">Foto Produk</label>

                                <div class="col-sm-10 d-flex align-items-start align-items-sm-center gap-4 ">
                                    {{-- Image --}}

                                    <div class="img-container img-container-sm rounded-circle">
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="user-avatar"
                                                class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                id="uploadedAvatar">
                                        @else
                                            <img src="/img/temp/product-temp.png" alt="user-avatar"
                                                class="img-preview d-block img-fluid img-fit mx-auto d-block"
                                                id="uploadedAvatar">
                                        @endif
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Upload new photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="hidden" name="oldImage" value="{{ $product->image }}">
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
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                        id="description" placeholder="Deskripsi" name="description"
                                        value="{{ old('description', $product->description) }}" required>
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
