{{-- <section id="pengajuan">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengajuan/</span>Pengajuan
        Koperasi</h4>
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg mb-4">
                    <div class="card mb-4">
                        <h5 class="card-header">Tabel Pengajuan Koperasi</h5>
                        <form action="/dashboard/pengajuan" method="get" class="d-flex mx-4 mb-2">
                            <input class="form-control me-2" type="text" name="searchKoperasi" id="searchKoperasi"
                                placeholder="Search" aria-label="Search" value="{{ request('searchKoperasi') }}">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Jenis</th>
                                        <th>Name</th>
                                        <th>Owner</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @if ($koperasis->count())
                                        @foreach ($koperasis as $koperasi)
                                            <tr>
                                                <td>
                                                    <strong>{{ $koperasi->nik }}</strong>
                                                </td>
                                                <td>
                                                    <strong>{{ $koperasi->categoryKoperasi->category }}</strong>
                                                </td>
                                                <td>
                                                    <strong>{{ Str::limit($koperasi->name, 20) }}</strong>
                                                </td>
                                                <td>{{ $koperasi->user->name }}</td>
                                                <td>
                                                    @if ($koperasi->status == 0)
                                                        <div class="spinner-border spinner-border-sm text-warning"
                                                            role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div><span
                                                            class="ms-2 badge bg-label-warning me-1">Pending</span>
                                                    @elseif ($koperasi->status == 1)
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
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <form id="userDelete-form"
                                                                action="/dashboard/pengajuan/koperasi/{{ $koperasi->id }}"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" name="status" value="1">
                                                                <button class="dropdown-item"
                                                                    onclick="return confirm('Apa anda yakin?')">
                                                                    <i class="bx bx-check me-1"></i> aproved
                                                                </button>
                                                            </form>
                                                            <form id="userDelete-form"
                                                                action="/dashboard/pengajuan/koperasi/{{ $koperasi->id }}"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <input type="hidden" name="status" value="2">
                                                                <button class="dropdown-item"
                                                                    onclick="return confirm('Apa anda yakin?')">
                                                                    <i class="bx bx-x me-1"></i> Unaproved
                                                                </button>
                                                            </form>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h1 class="text-center mt-5 mb-5">Koperasi not Found :)</h1>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section> --}}
