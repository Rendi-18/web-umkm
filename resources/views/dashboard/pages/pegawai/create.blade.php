<div class="container-xxl flex-grow-1 container-p-y">
    <section id="pegawai-form-create" class="">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Pegawai /</span> Form Tambah Pegawai
        </h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Tambah Pegawai</h5> <small class="text-muted float-end">PAstikan Data yang
                        anda masukkan sudah benar</small>
                </div>
                <div class="card-body">
                    {{-- <form action="/dashboard/umkm/{{ $umkm->id }}/umkm-product" method="POST"
                            enctype="multipart/form-data"> --}}
                    <form action="#" method="POST" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="pegawai_id">Id Pegawai</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control @error('pegawai_id') is-invalid @enderror"
                                    id="pegawai_id" placeholder="Id pegawai" name="pegawai_id" value="pegawai ID"
                                    required>
                                {{-- @error('umkm_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="klasifikasi">klasifikasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('klasifikasi') is-invalid @enderror"
                                    id="klasifikasi" placeholder="klasifikasi" name="klasifikasi" value="klasifikasi"
                                    required>
                                {{-- @error('klasifikasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nib">NIB</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nib') is-invalid @enderror"
                                    id="nib" placeholder="NIB" name="nib" value="NIB" required>
                                {{-- @error('nib')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Nama Pegawai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Nama Pegawai" name="name" value="#" required>
                                {{-- @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="jabatan">Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                    id="jabatan" placeholder="Jabatan" name="jabatan" value="#" required>
                                {{-- @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Foto Agenda</label>
                            <div class="col-sm-10 px-3 pl-5">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <div class="img-container img-container-sm rounded">
                                        {{-- @if ($umkm->image)
                                                <img src="{{ asset('storage/' . $umkm->image) }}" alt="user-avatar"
                                                    class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                    id="uploadedAvatar">
                                            @else --}}
                                        <img src="/img/portfolio/portfolio-7.jpg" alt="user-avatar"
                                            class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                            id="uploadedAvatar">
                                        {{-- @endif --}}
                                    </div>

                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
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
                                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-divider">Social</div>

                        {{-- Social --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="facebook">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                    id="facebook" placeholder="facebook" name="facebook" value="" required>
                                {{-- @error('facebook')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="instagram">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                    id="instagram" placeholder="@ " name="instagram" value="" required>
                                {{-- @error('instagram')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tweet">Tweet</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('tweet') is-invalid @enderror"
                                    id="tweet" placeholder="@ " name="tweet" value="" required>
                                {{-- @error('tweet')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="whatsapp">whatsapp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('whatsapp') is-invalid @enderror"
                                    id="whatsapp" placeholder="+62" name="whatsapp" value="" required>
                                {{-- @error('whatsapp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
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
