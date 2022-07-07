<section id="form-regist-koperasi" class="container">
    <h4 class="col-6 fw-bold py-3 mb-4"><span class="text-muted fw-light">From/</span> Registrasi</h4>

    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Registrasi Koperasi</h5> <small class="text-muted float-end">Pastikan data yang anda
                    masukkan benar</small>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    {{-- Image --}}
                    <div class="py-3 px-3 pl-5">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            {{-- @if ($umkm->image) --}}
                            {{-- <img src="{{ asset('storage/' . $umkm->image) }}" alt="user-avatar"
                                        class="d-block rounded-circle img-preview" height="100" width="100"
                                        id="uploadedAvatar"> --}}
                            {{-- @else --}}
                            <img src="/img/elements/2.jpg" alt="user-avatar" class="d-block rounded-circle img-preview"
                                height="100" width="100" id="uploadedAvatar">
                            {{-- @endif --}}
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="hidden" name="oldImage" value="">
                                    <input type="file" id="upload" class="account-file-input "
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
                        <label class="col-sm-2 col-form-label" for="nib">NIK</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text "><i class="bx bx-barcode"></i></span>
                                <input type="text" name="nib" class="form-control" id="nib"
                                    placeholder="Nomor Induk Koperasi" value="" required>
                            </div>
                        </div>
                    </div>


                    {{-- Name --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="name">Nama Koperasi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text "><i class="bx bx-store-alt"></i></span>
                                <input type="text" name="name" class="form-control " id="name"
                                    placeholder="Nama" aria-describedby="basic-icon-default-fullname2" value=""
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Name --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="name-koperasi">Jenis Koperasi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text "><i class='bx bx-building-house'></i></span>
                                <select class="form-select" id="name-koperasi">
                                    <option selected="">Jenis Koperasi</option>
                                    <option value="Koperasi Konsumen">Koperasi Konsumen</option>
                                    <option value="Koperasi Produsen">Koperasi Produsen</option>
                                    <option value="Koperasi Simpan Pinjam">Koperasi Simpan Pinjam</option>
                                    <option value="Koperasi Pemasaran">Koperasi Pemasaran</option>
                                </select>
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
                                    aria-describedby="basic-icon-default-phone2" value="" required>
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
                        <label class="col-sm-2 form-label" for="city">Kota/Kabupaten</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-address" class="input-group-text"><i
                                        class='bx bx-buildings'></i></span>
                                <input type="text" name="city" id="city" class="form-control phone-mask "
                                    placeholder="Kota/Kabupaten" aria-label=""
                                    aria-describedby="basic-icon-default-address" value="" required>
                                @error('address')
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
                                    placeholder="Alamat" aria-label="" aria-describedby="basic-icon-default-address"
                                    value="" required>
                                @error('address')
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
