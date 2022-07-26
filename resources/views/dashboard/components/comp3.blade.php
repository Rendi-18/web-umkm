<div class="row">
    <div class="col-lg-10 mb-4 order-0">
        <div class="card justify-content-end h-100">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Wellcomeback {{ Auth::user()->name }} 🎉</h5>
                        <p class="mb-4">
                            Tidak ada yang namanya kebetulan. <span class="fw-bold">Kesempatan</span> datang karena
                            diciptakan. Jadi, jangan
                            pernah berhenti <span class="fw-bold">Berusaha.</span>
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 order-1">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <div class="icon-alt bg-label-success rounded">
                                    <i class="bx bx-store text-success"></i>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View
                                        More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">UMKM</span>
                        <h4 class="card-title mb-2">Total</h4>
                        <small class="text-success fw-semibold mb-0 mt-auto">
                            <div class="spinner-border-sm spinner-grow text-success" role="status">
                                <span class="visually-hidden">Loading... </span>
                            </div> <span class="ps-2">{{ $umkmUser->where('status', 1)->count() }}</span>
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Table UMKM -->
<div class="row">
    @if (session()->has('successUmkm'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successUmkm') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-lg tabel-user">
        <div class="card mb-4">
            <h5 class="card-header">Tabel UMKM </h5>
            <form action="/dashboard" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="searchUmkm" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('searchUmkm') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NIB</th>
                            <th>Name</th>
                            <th>Kabupaten</th>
                            <th>Owner</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @if ($umkmUser->count())
                        <tbody class="table-border-bottom-0">
                            @foreach ($umkmUser as $umkm)
                                <tr>
                                    <td>
                                        <strong>{{ $umkm->nib }}</strong>
                                    </td>
                                    <td>
                                        <strong>{{ $umkm->name }}</strong>
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
                                                {{-- <a class="dropdown-item"
                                                    href="/dashboard/umkm/{{ $umkm->id }}/umkm-profile"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a> --}}
                                                <form id="umkmDelete-form"
                                                    action="/dashboard/umkm/{{ $umkm->id }}/umkm-profile"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin umkm akan dihapus secara permanen?')">
                                                        <i class="bx bx-trash me-1"></i> Delete
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
