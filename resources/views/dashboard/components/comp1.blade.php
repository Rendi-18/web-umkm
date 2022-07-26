<div class="row">
    <div class="col-lg-12 mb-4 order-0">
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
</div>
<div class="row">
    <div class="col-lg-3 col-md-12 col-6 mb-4">
        <div class="card">
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
                <span class="fw-semibold d-block mb-1">Total</span>
                <h4 class="card-title mb-2">UMKM</h4>
                <small class="text-success fw-semibold mb-0 mt-auto">
                    <div class="spinner-border-sm spinner-grow text-success" role="status">
                        <span class="visually-hidden">Loading... </span>
                    </div> <span class="ps-2">{{ $umkms->where('status', 1)->count() }}</span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-6 mb-4">
        <div class="card">
            <div class="card-body d-flex flex-column">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <div class="icon-alt bg-label-warning rounded">
                            <i class="bx bx-time text-warning"></i>
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
                <span class="fw-semibold d-block mb-1">Total</span>
                <h4 class="card-title mb-2">Permohonan</h4>
                <small class="text-warning fw-semibold mb-0 mt-auto">
                    <div class="spinner-border-sm spinner-grow text-warning" role="status">
                        <span class="visually-hidden">Loading... </span>
                    </div> <span class="ps-2">{{ $umkms->where('status', 0)->count() }}</span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-6 mb-4">
        <div class="card">
            <div class="card-body d-flex flex-column">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <div class="icon-alt bg-label-danger rounded">
                            <i class="bx bx-user text-danger"></i>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                            <a class="dropdown-item" href="javascript:void(0);">View
                                More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <span class="d-block mb-1">Total</span>
                <h4 class="card-title text-nowrap mb-2">User</h4>
                <small class="text-danger fw-semibold mb-0 mt-auto">
                    <div class="spinner-border-sm spinner-grow text-danger" role="status">
                        <span class="visually-hidden">Loading... </span>
                    </div> <span class="ps-2">{{ $users->count() }}</span>
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-12 col-6 mb-4">
        <div class="card">
            <div class="card-body d-flex flex-column">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <div class="icon-alt bg-label-primary rounded">
                            <i class='bx bx-message-square-dots'></i>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                            <a class="dropdown-item" href="javascript:void(0);">View
                                More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total</span>
                <h4 class="card-title mb-2">Pesan</h4>
                <small class="text-primary fw-semibold mb-0 mt-auto">
                    <div class="spinner-border-sm spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading... </span>
                    </div> <span class="ps-2">{{ $pesans->count() }}</span>
                </small>
            </div>
        </div>

    </div>
</div>
