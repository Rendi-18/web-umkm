<!-- Table UMKM -->
<div class="row">
    @if (session()->has('successUser'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successUser') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-lg tabel-user">
        <div class="card mb-4">
            <h5 class="card-header">Tabel UMKM </h5>
            <form action="/dashboard/umkm" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIB</th>
                            <th>Name</th>
                            <th>Kabupaten/Kota</th>
                            <th>Owner</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @if ($umkms->count())
                        <tbody class="table-border-bottom-0">
                            @foreach ($umkms as $umkm)
                                <tr>
                                    <td>
                                        <strong>{{ $umkm->nib }}</strong>

                                    </td>
                                    <td>
                                        <strong>{{ Str::limit($umkm->name, 20) }}</strong>
                                    </td>
                                    <td>{{ $umkm->city }}</td>
                                    <td>{{ $umkm->user->name }}</td>
                                    <td>
                                        @if ($umkm->status == 0)
                                            <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div><span class="ms-2 badge bg-label-warning me-1">Pending</span>
                                        @elseif ($umkm->status == 1)
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
                                                {{-- <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a> --}}
                                                <form id="userDelete-form" action="/dashboard/umkm/{{ $umkm->id }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin user dinonaktifkan secara permanen?')">
                                                        <i class="bx bx-trash me-1"></i> Nonaktikan
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @else
                        <h1 class="text-center mt-5 mb-5">
                            UMKM not found :)
                        </h1>
                    @endif

                </table>
            </div>
        </div>
    </div>
</div>
