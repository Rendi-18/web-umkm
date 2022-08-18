<section id="regist-koperasi">
    <div class="col-12 mb-5">
        <h4 class="col-6 fw-bold py-3 mb-2"><span class="text-muted fw-light">Data/</span> Pengajuan Bantuan</h4>

        {{-- Flash Message --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <h5 class="card-header">Tabel Pengajuan Bantuan</h5>
            <form action="/dashboard/izin/surat" method="get" class="d-flex mx-4 mb-2">
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
                        @if ($bantuans->count())
                            @foreach ($bantuans as $bantuan)
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
                                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#backDropModalDetail">
                                                    <i class="bx bx-detail me-1"></i>Detail
                                                </button>

                                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#backDropModal">
                                                    <i class="bx bx-check me-1"></i>Aprove
                                                </button>

                                                <form id="userDelete-form dropdown-item"
                                                    action="/dashboard/pengajuan/{{ $bantuan->id }}/bantuan"
                                                    method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="status" value="2">
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-x me-1"></i> Tolak
                                                    </button>
                                                </form>
                                                @if ($bantuan->file)
                                                    <a class="dropdown-item" target="_blank"
                                                        href="{{ asset('storage/' . $bantuan->file) }}" download><i
                                                            class='bx bx-down-arrow-circle'></i>
                                                        Download
                                                    </a>
                                                @endif

                                            </div>
                                        </div>
                                        @include('dashboard.components.modalsformBantuan')
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