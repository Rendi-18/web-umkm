<section id="regist-koperasi">
    <h4 class="col-6 fw-bold pb-2 mb-2">Pengajuan Bantuan</h4>

    {{-- Flash Message --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4 mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <h5 class="card-header">Form Edit Pengajuan Bantuan</h5>
                        <div class="card-body">
                            <form class="" action="/dashboard/bantuan/bantuan" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- NIB/NIK --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="nib">NIB</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text "><i class="bx bx-barcode"></i></span>
                                            <input type="text" name="nib"
                                                class="form-control @error('nib') is-invalid @enderror" id="nib"
                                                placeholder="Nomor Induk Koperasi" value="{{ old('nib') }}" required>
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
                                    <label class="col-sm-2 col-form-label" for="name">Nama
                                        UMKM</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text "><i class="bx bx-store-alt"></i></span>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"" id="name"
                                                placeholder="Nama" aria-describedby="basic-icon-default-fullname2"
                                                value="{{ old('name') }}" required>
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
                                    <label class="col-sm-2 col-form-label" for="phonenumber">Phone No</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-phone"></i></span>
                                            <input type="number" name="phonenumber" id="phonenumber"
                                                class="form-control phone-mask @error('phonenumber') is-invalid @enderror"
                                                placeholder="+62" aria-label="658 799 8941"
                                                aria-describedby="basic-icon-default-phone2"
                                                value="{{ old('phonenumber') }}" required>
                                            @error('phonenumber')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Jenis --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="jenis">Phone No</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-copy-alt"></i></span>
                                            <select class="form-select phone-mask @error('jenis') is-invalid @enderror"
                                                id="jenis" required>
                                                <option selected="">Jenis Bantuan...</option>
                                                <option value="1">Bantuan Dana</option>
                                                <option value="2">Penyuluhan</option>
                                                <option value="3">Lainnya..</option>
                                            </select>
                                            @error('jenis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- File --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="image">Proposal</label>
                                    <div class="col-sm-10 d-flex align-items-start align-items-sm-center gap-4 ">
                                        <div class="input-group">
                                            <input type="file"
                                                class="form-control @error('fileproposal') is-invalid @enderror"
                                                id="fileproposal"accept=".pdf" required>
                                            <label class="input-group-text" for="fileproposal">Upload</label>
                                            @error('fileproposal')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- tambahan --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="description">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge flex-column">
                                            <input type="hidden" name="description" id="description"
                                                class="form-control phone-mask @error('description') is-invalid @enderror"
                                                placeholder="Tulis disini deskripsi yang anda butuhkan"
                                                aria-describedby="basic-icon-default-address"
                                                value="{{ old('description') }}" required>
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
                                        <button type="submit" class="btn btn-primary"><span
                                                class='bx bx-save'></span>
                                            &nbsp;
                                            Save</button>
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
