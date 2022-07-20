<section id="regist-koperasi">
    <h4 class="col-6 fw-bold pb-2 mb-2">Pengajuan Surat</h4>
    <div class="row g-4 mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <h5 class="card-header">Form Pengajuan Perizinan</h5>
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
    <div class="col-12 mb-5">
        <h4 class="col-6 fw-bold py-3 mb-2"><span class="text-muted fw-light">Data/</span> Pengajuan Surat</h4>
        <div class="card">
            <h5 class="card-header">Tabel Pengajuan Perizinan</h5>
            <form action="/dashboard/izin/surat" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>NIB</th>
                            <th>Nama</th>
                            <th>Phone No</th>
                            <th>Kategori Perizinan</th>
                            <th>Izin lain</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($izins->count())
                            @foreach ($izins as $izin)
                                <tr>
                                    <td>{{ $izin->id }}</td>
                                    <td><strong>{{ $izin->nib }}</strong></td>
                                    <td>{{ $izin->name }}</td>
                                    <td>{{ $izin->phonenumber }}</td>
                                    <td><span
                                            class="badge bg-label-primary me-1"><strong>{{ $izin->category->category }}</strong></span>
                                    </td>
                                    <td>{!! $izin->description !!}</td>
                                    <td>
                                        @if ($izin->status == 0)
                                            <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div><span class="ms-2 badge bg-label-warning me-1">Pending</span>
                                        @elseif ($izin->status == 1)
                                            <span class="text-info"><strong><i
                                                        class="bx bx-check me-1"></i></strong></span>
                                            <span class="badge bg-label-info me-1">Aproved</span>
                                        @else
                                            <span class="text-danger"><strong>
                                                    <i class="bx bx-x me-1"></i></strong></span>
                                            <span class="badge bg-label-danger me-1">Ditolak</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form id="userDelete-form"
                                                    action="/dashboard/izin/surat/{{ $izin->id }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-x me-1"></i> Batalkan
                                                    </button>
                                                </form>
                                                <a class="dropdown-item" target="_blank"
                                                    @if ($izin->file) @else
                                            disabled @endif
                                                    href="{{ asset('storage/' . $izin->file) }}" download><i
                                                        class='bx bx-down-arrow-circle'></i>
                                                    Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h1 class="text-center mt-5 mb-5">Izin not found :)</h1>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
