<section id="pengajuan">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengajuan/</span>Pengajuan
        UMKM & Koperasi</h4>
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg mb-4">
                    <div class="card mb-4">
                        <h5 class="card-header">Tabel Pengajuan</h5>
                        <form class="d-flex mx-4 mb-2" onsubmit="return false">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NIK/NIB</th>
                                        <th>Jenis</th>
                                        <th>Name</th>
                                        <th>Owner</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($umkms as $umkm)
                                        <tr>
                                            <td>
                                                <strong>20202056</strong>
                                            </td>
                                            <td>
                                                <strong>Koperasi</strong>
                                            </td>
                                            <td>
                                                <strong>{{ $umkm->name }}</strong>
                                            </td>
                                            <td>{{ $umkm->user->name }}</td>
                                            <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-check me-1"></i>
                                                            Aprove</a>
                                                        <form id="userDelete-form"
                                                            action="/dashboard/user/{{ $umkm->id }}" method="post">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>
