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
                            <label class="col-sm-2 col-form-label" for="image">Foto Pegawai</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" placeholder="Foto" name="image" value="#" required
                                    onchange="previewImage()">
                                <img src="" class="mt-3 img-fluid img-preview" alt="">
                                {{-- @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror --}}
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-img">Foto Product</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="file" id="formFileMultiple" multiple="">
                                    </div>
                                </div>
                            </div> --}}
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
