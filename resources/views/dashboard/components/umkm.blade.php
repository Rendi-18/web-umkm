{{-- component umkm --}}
<div class="row">
    <div class="col-lg-8 mb-4 order-0">
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
    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
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

                        <span class="fw-semibold d-block mb-1">UMKM & Koperasi</span>
                        <small class="text-success fw-semibold">
                            <div class="spinner-border-sm spinner-grow text-success" role="status">
                                <span class="visually-hidden">Loading... </span>
                            </div> <span class="ps-2">6000</span>
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <div class="icon-alt bg-label-info rounded">
                                    <i class='bx bx-package text-info'></i>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="javascript:void(0);">View
                                        More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Produk</span>
                        <h3 class="card-title mb-2">Total</h3>
                        <small class="text-info fw-semibold">
                            <div class="spinner-border-sm spinner-grow text-info" role="status">
                                <span class="visually-hidden">Loading... </span>
                            </div> <span class="ps-2">6000</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                            <th>Kabupaten</th>
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
                                        <strong>202056</strong>

                                    </td>
                                    <td>
                                        <strong>{{ $umkm->name }}</strong>
                                    </td>
                                    <td>{{ $umkm->address }}</td>
                                    <td>{{ $umkm->user->name }}</td>
                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <form id="userDelete-form"
                                                    action="/dashboard/user/{{ $umkm->id }}" method="post">
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
