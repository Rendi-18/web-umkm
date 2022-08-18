@extends('layouts.dashboard')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div id="dana">
                <section id="regist-koperasi">
                    <h4 class="col-6 fw-bold pb-2 mb-2">Laporan</h4>

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
                                        <h5 class="card-header">Form Laporan</h5>
                                        <div class="card-body">
                                            <form class="" action="/dashboard/laporan/{{ $laporan->id }}"
                                                method="POST" enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                {{-- Name --}}
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="name">Nama
                                                        UMKM / NIB</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text "><i
                                                                    class="bx bx-store-alt"></i></span>
                                                            <select class="form-select" id="umkm_id" name="umkm_id">
                                                                @foreach ($umkms as $umkm)
                                                                    @if (old('umkm_id', $laporan->umkm_id) == $umkm->id)
                                                                        <option value="{{ $umkm->id }}" selected>
                                                                            {{ $umkm->name }}
                                                                            / ({{ $umkm->nib }})
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $umkm->id }}">
                                                                            {{ $umkm->name }}
                                                                            / ({{ $umkm->nib }})</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                            @error('name-nib')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Phonenumber --}}
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="phonenumber">Phone
                                                        No</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                                    class="bx bx-phone"></i></span>
                                                            <input type="number" name="phonenumber" id="phonenumber"
                                                                class="form-control phone-mask @error('phonenumber') is-invalid @enderror"
                                                                placeholder="+62" aria-label="658 799 8941"
                                                                aria-describedby="basic-icon-default-phone2"
                                                                value="{{ old('phonenumber', $laporan->phonenumber) }}"
                                                                required>
                                                            @error('phonenumber')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Tahun --}}
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label" for="laporan">Tahun</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                                    class="bx bx-copy-alt"></i></span>
                                                            <input type="date" name="tahun" id="laporan"
                                                                class="form-control phone-mask @error('tahun') is-invalid @enderror"
                                                                placeholdLaporan.."
                                                                value={{ old('tahun', $laporan->tahun) }} required>
                                                            @error('tahun')
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
                                                    <div
                                                        class="col-sm-10 d-flex align-items-start align-items-sm-center gap-4 ">
                                                        <div class="input-group">
                                                            <input type="hidden" name="oldDoc"
                                                                value="{{ $laporan->file }}">
                                                            <input type="file"
                                                                class="form-control @error('file') is-invalid @enderror"
                                                                id="file"accept=".pdf" name="file">
                                                            <label class="input-group-text" for="file">Upload</label>
                                                            @error('file')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- tambahan --}}
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="description">Deskripsi</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge flex-column">
                                                            <input type="hidden" name="description" id="description"
                                                                class="form-control phone-mask @error('description') is-invalid @enderror"
                                                                placeholder="Tulis disini deskripsi yang anda butuhkan"
                                                                aria-describedby="basic-icon-default-address"
                                                                value="{{ old('description', $laporan->description) }}"
                                                                required>
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
            </div>
        </div>

        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>
@endsection
