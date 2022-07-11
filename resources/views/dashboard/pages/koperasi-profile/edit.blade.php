@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <section id="form-edit" class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style2 py-3 mb-4">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Koperasi</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-profile">Profile</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>



        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Profile</h5> <small class="text-muted float-end">Pastikan data yang anda
                        masukkan benar</small>
                </div>
                <div class="card-body">
                    <form action="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-profile" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        {{-- Image --}}
                        <div class="py-3 px-3 pl-5">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <div class="img-container img-container-sm rounded-circle">
                                    @if ($koperasi->image)
                                        <img src="{{ asset('storage/' . $koperasi->image) }}" alt="user-avatar"
                                            class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                            id="uploadedAvatar">
                                    @else
                                        <img src="/img/temp/store-temp.png" alt="user-avatar"
                                            class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                            id="uploadedAvatar">
                                    @endif
                                </div>

                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="hidden" name="oldImage" value="{{ $koperasi->image }}">
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
                        <hr class="my-0 mb-3">

                        {{-- NIB/NIK --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nik">NIK</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text "><i class="bx bx-barcode"></i></span>
                                    <input type="text" name="nik"
                                        class="form-control @error('nik') is-invalid @enderror" id="nik"
                                        placeholder="Name" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('nik', $koperasi->nik) }}" required>
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        {{-- Name --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text "><i class="bx bx-store-alt"></i></span>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Name" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2"
                                        value="{{ old('name', $koperasi->name) }}" required>
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
                                        value="{{ old('phonenumber', $koperasi->phonenumber) }}" required>
                                    @error('phonenumber')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- City --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="address">Kota/Kabupaten</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-address" class="input-group-text"><i
                                            class='bx bx-buildings'></i></span>
                                    <input type="text" name="address" id="address" class="form-control phone-mask "
                                        placeholder="Address" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-address" value="Bandar Lampung" required>
                                    @error('city')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="address">Alamat</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-address" class="input-group-text"><i
                                            class="bx bx-map-alt"></i></span>
                                    <input type="text" name="address" id="address"
                                        class="form-control phone-mask @error('address') is-invalid @enderror"
                                        placeholder="Address" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-address"
                                        value="{{ old('address', $koperasi->address) }}" required>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Member --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="member">Anggota</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-member" class="input-group-text"><i
                                            class="bx bx-group"></i></span>
                                    <input type="number" name="member" id="member"
                                        class="form-control phone-mask @error('member') is-invalid @enderror"
                                        placeholder="member" aria-label="member"
                                        aria-describedby="basic-icon-default-member"
                                        value="{{ old('member', $koperasi->member) }}" required>
                                    @error('member')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Employed --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="employee">Karyawan</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-employee" class="input-group-text"><i
                                            class="bx bxs-group"></i></span>
                                    <input type="number" name="employee" id="employee"
                                        class="form-control phone-mask @error('employee') is-invalid @enderror"
                                        placeholder="Karyawan" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-employee"
                                        value="{{ old('employee', $koperasi->employee) }}" required>
                                    @error('employee')
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
                                        value="{{ old('descriprion', $koperasi->description) }}" required>
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


    <!-- Content wrapper -->
@endsection
