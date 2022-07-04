<div class="container-xxl flex-grow-1 container-p-y">
    <section id="product-form-create" class="">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Layanan /</span> Form Tambah Layanan
        </h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Tambah Layanan</h5> <small class="text-muted float-end">Pastikan anda
                        memasukkan data yang benar</small>
                </div>
                <div class="card-body">
                    <form action="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-product" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="koperasi_id">Id Koperasi</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control @error('koperasi_id') is-invalid @enderror"
                                    id="koperasi_id" placeholder="Id koperasi" name="koperasi_id"
                                    value="{{ $koperasi->id }}" required>
                                @error('koperasi_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- Nama Layanan --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Nama" name="name" value="Nama Layanan" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- layanan --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="price">Layanan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    id="price" placeholder="Harga" name="price" value='contoh: "Bagi Hasil 10%"'
                                    required>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- Kebutuhan --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="weight">Kebutuhan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('weight') is-invalid @enderror"
                                    id="weight" placeholder="Berat" name="weight"
                                    value='contoh: "Pendidikan, Renovasi"' required>
                                @error('weight')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- Foto --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="image">Foto Layanan</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" placeholder="Foto" name="image" value="" required
                                    onchange="previewImage()">
                                <img src="" class="mt-3 img-fluid img-preview" alt="">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- Deskripsi --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                    id="description" placeholder="Deskripsi" name="description"
                                    value="Deskripsi Layanan..." required>
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
