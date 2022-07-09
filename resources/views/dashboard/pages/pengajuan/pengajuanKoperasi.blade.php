<section id="pengajuan">
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
                                                    <strong>20202056</strong>
                                                </td>
                                                <td>
                                                    <strong>Koperasi</strong>
                                                </td>
                                                <td>
                                                    <strong>{{ $koperasi->name }}</strong>
                                                </td>
                                                <td>{{ $koperasi->user->name }}</td>
                                                <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button"
                                                            class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                                    class="bx bx-check me-1"></i>
                                                                Aprove</a>
                                                            <form id="userDelete-form"
                                                                action="/dashboard/user/{{ $koperasi->id }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="dropdown-item"
                                                                    onclick="return confirm('Apa anda yakin user dinonaktifkan secara permanen?')">
                                                                    <i class="bx bx-x me-1"></i> Unaproved
                                                                </button>
                                                            </form>
                                                        </div>
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

</section>
