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
                        <h5 class="card-header">Form Pengajuan Bantuan</h5>
                        <div class="card-body">
                            <form class="" action="/dashboard/bantuan" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- Name --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="name">Nama
                                        UMKM / NIB</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text "><i class="bx bx-store-alt"></i></span>
                                            {{-- <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"" id="name"
                                                placeholder="Nama" aria-describedby="basic-icon-default-fullname2"
                                                value="{{ old('name-nib') }}" required> --}}
                                            <select class="form-select" id="umkm_id" name="umkm_id">
                                                @foreach (Auth::user()->umkm as $umkm)
                                                    <option value="{{ $umkm->id }}">
                                                        {{ $umkm->name }} / ({{ $umkm->nib }})
                                                    </option>
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
                                    <label class="col-sm-2 col-form-label" for="bantuan">Jenis Bantuan</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-copy-alt"></i></span>
                                            <input type="text" name="bantuan" id="bantuan"
                                                class="form-control phone-mask @error('bantuan') is-invalid @enderror"
                                                placeholder="Jenis Bantuan.." value="{{ old('bantuan') }}" required>
                                            @error('bantuan')
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
                                                class="form-control @error('file') is-invalid @enderror"
                                                id="file"accept=".pdf" name="file" required>
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
        <h4 class="col-6 fw-bold py-3 mb-2"><span class="text-muted fw-light">Data/</span> Pengajuan Bantuan</h4>
        <div class="card">
            <h5 class="card-header">Tabel Pengajuan Bantuan</h5>
            <form action="/dashboard/bantuan/surat" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIB</th>
                            <th>Nama UMKM</th>
                            <th>Phone No</th>
                            <th>Jenis Bantuan</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (Auth::user()->bantuan->count())
                            @foreach (Auth::user()->bantuan as $bantuan)
                                <tr>
                                    <td><strong>{{ $bantuan->umkm->nib }}</strong></td>
                                    <td>{{ $bantuan->umkm->name }}</td>
                                    <td>{{ $bantuan->phonenumber }}</td>
                                    <td>
                                        <span class="badge bg-label-primary me-1">
                                            <strong>{{ $bantuan->bantuan }}</strong>
                                        </span>
                                    </td>
                                    <td>{!! Str::Limit($bantuan->description, 15) !!}</td>
                                    <td>
                                        @if ($bantuan->status == 0)
                                            <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div><span class="ms-2 badge bg-label-warning me-1">Pending</span>
                                        @elseif ($bantuan->status == 1)
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
                                                <a class="dropdown-item"target="_blank"
                                                    href="/dashboard/bantuan/edit">
                                                    <i class='bx bx-edit'></i>
                                                    Edit
                                                </a>
                                                <form id="userDelete-form"
                                                    action="/dashboard/bantuan/{{ $bantuan->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-x-circle"></i> Batalkan
                                                    </button>
                                                </form>
                                                @if ($bantuan->accept)
                                                    <a class="dropdown-item " target="_blank"
                                                        href="{{ asset('storage/' . $bantuan->accept) }}" download><i
                                                            class='bx bx-down-arrow-circle'></i>
                                                        Download</a>
                                                @endif

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h1 class="text-center mt-5 mb-5">Bantuan not found :)</h1>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
