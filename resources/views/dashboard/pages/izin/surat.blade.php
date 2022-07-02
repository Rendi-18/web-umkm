<section id="regist-koperasi">
    <h4 class="col-6 fw-bold py-3 mb-2">Pengajuan Surat</h4>
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg mb-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form class="" action="/dashboard/izin/surat" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- NIB/NIK --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="nib">NIK/NIB</label>
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
                                        Koperasi</label>
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
                                            <input type="text" name="phonenumber" id="phonenumber"
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

                                {{-- Kategori Surat Izin --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="category_id">Kategori
                                        Perizinan</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text "><i class='bx bx-receipt'></i></span>
                                            <select class="form-select" id="category_id" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- tambahan --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="description">Izin lain</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge flex-column">
                                            <input type="hidden" name="description" id="description"
                                                class="form-control phone-mask @error('description') is-invalid @enderror"
                                                placeholder="Tulis disini izin lain yang anda butuhkan"
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
