{{-- <!-- Table User -->
<div class="row">
    <div class="col-lg tabel-user">
        @if (session()->has('successKoperasi'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('successKoperasi') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-4">
            <h5 class="card-header">Tabel Koperasi </h5>
            <form action="/dashboard" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="searchKoperasi" id="search"
                    placeholder="Search" aria-label="Search" value="{{ request('searchKoperasi') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Name</th>
                            <th>Kabupaten/Kota</th>
                            <th>Owner</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($koperasiUser->count())
                            @foreach ($koperasiUser as $koperasi)
                                <tr>
                                    <td>
                                        <strong>{{ $koperasi->nik }}</strong>

                                    </td>
                                    <td>
                                        <strong>{{ Str::limit($koperasi->name, 20) }}</strong>
                                    </td>
                                    <td>{{ $koperasi->city }}</td>
                                    <td>{{ $koperasi->user->name }}</td>
                                    <td>
                                        @if ($koperasi->status == 0)
                                            <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div><span class="ms-2 badge bg-label-warning me-1">Pending</span>
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
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form id="userDelete-form"
                                                    action="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-profile"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-trash me-1"></i> Nonaktikan
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h1 class="text-center mt-5 mb-5">Koperasi not found :)</h1>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!--/ Hoverable Table rows --> --}}
