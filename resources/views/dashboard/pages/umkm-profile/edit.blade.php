@extends('layouts.dashboard')

@section('content')
    <section id="form-edit" class="container">
        <h4 class="col-6 fw-bold py-3 mb-4"><span class="text-muted fw-light">From/</span> Edit profile</h4>



        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Profile</h5> <small class="text-muted float-end">Pastikan data yang anda
                        masukkan benar</small>
                </div>
                <div class="card-body">
                    <form action="/dashboard/umkm/{{ $umkm->id }}/umkm-profile" method="POST">
                        @method('put')
                        @csrf
                        <div class="col-3 py-3 px-3 pl-5">
                            <img src="/img/elements/2.jpg" class="img-pr h-auto rounded-circle img-fluid">
                        </div>
                        {{-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="inputGroupFile02">Foto Profile</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>
                        </div> --}}

                        {{-- Name --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text "><i
                                            class="bx bx-store-alt"></i></span>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Name" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('name', $umkm->name) }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Phonenumber --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="phonenumber">Phone No</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                    <input type="text" name="phonenumber" id="phonenumber"
                                        class="form-control phone-mask @error('phonenumber') is-invalid @enderror"
                                        placeholder="+62" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-phone2"
                                        value="{{ old('phonenumber', $umkm->phonenumber) }}" required>
                                    @error('phonenumber')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="address">Address</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-address" class="input-group-text"><i
                                            class="bx bx-map-alt"></i></span>
                                    <input type="text" name="address" id="address"
                                        class="form-control phone-mask @error('address') is-invalid @enderror"
                                        placeholder="Address" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-address"
                                        value="{{ old('address', $umkm->address) }}" required>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="description">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="hidden" name="description" id="description"
                                        class="form-control phone-mask @error('description') is-invalid @enderror"
                                        placeholder="Description" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-address"
                                        value="{{ old('descriprion', $umkm->description) }}" required>
                                    <trix-editor input="description"></trix-editor>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
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
@endsection
