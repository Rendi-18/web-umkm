<section id="jasa-card" class="">
    <div class="row py-3 mb-4">
        <div class="col-6">
            <h4 class="fw-bold">Layanan Unggulan {{ $koperasi->name }} </h4>
        </div>

    </div>

    @if (session()->has('successUnggulan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successUnggulan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        @if ($services->where('isUnggulan')->count())
            @foreach ($services->where('isUnggulan') as $service)
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100">
                        <div class="img-container img-container-prd card-img-top">
                            @if ($service->image)
                                <img class="" src="{{ asset('storage/' . $service->image) }}"
                                    alt="Card image cap">
                            @else
                                <img class="card-img-top img-fluid" src="/img/temp/service-temp.png"
                                    alt="Card image cap">
                            @endif
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text mb-1">{{ $service->service }}</p>
                            <p class="card-text">
                                <span class="text-success">
                                    <i class="bx bx-star"></i>
                                </span>
                                Layanan
                            </p>
                            <form action="/dashboard/koperasi-jasa/{{ $service->id }}/unggulan" method="post">
                                @method('put')
                                @csrf
                                <input type="hidden" class="btn-check" id="btncheck2" value="0" name="isUnggulan"
                                    autocomplete="off">
                                <button class="btn btn-outline-primary" for="btncheck2"
                                    onclick="return confirm('Apa anda yakin?')"><i class='bx bx-star'></i>
                                    Hilangkan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h4 class="text-center">Belum ada Layanan unggulan :)</h4>
        @endif
    </div>

</section>
<hr class="my-5">

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<section id="Layanan-table" class="">
    <div class="row py-3 mb-4">
        <div class="col-6">
            <h4 class="fw-bold">Tabel Layanan</h4>
        </div>
        <div class="col-6 d-flex ">
            <a class="ms-auto" href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-jasa/create">
                <button type="button" class="btn btn-primary ">
                    <i class="tf-icons bx bx-plus d-lg-none "></i><span class="d-none d-sm-block"><i
                            class="tf-icons bx bx-plus"></i>&nbsp; Tambah Layanan</span>
                </button>
            </a>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Tabel Layanan</h5>
        <form action="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-jasa" method="get" class="d-flex mx-4 mb-2">
            <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                aria-label="Search" value="{{ request('search') }}">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Layanan</th>
                        <th>Kebutuhan</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($services->count())
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up img-container rounded" title=""
                                            data-bs-original-title="">
                                            @if ($service->image)
                                                <img src="{{ asset('storage/' . $service->image) }}" alt="Avatar"
                                                    class="img-fluid img-fi border-0t">
                                            @else
                                                <img src="/img/temp/service-temp.png" alt="Avatar"
                                                    class="img-fluid img-fit border-0">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <span class="badge bg-label-primary me-1">{{ $service->name }}</span>
                                    @if ($service->isUnggulan)
                                        <span class="badge bg-label-danger me-1">Unggulan</span>
                                    @endif
                                </td>
                                <td>{{ $service->service }}</td>
                                <td>{{ $service->needs }}</td>
                                <td>{!! $service->description !!}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i
                                                class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="/dashboard/koperasi-jasa/{{ $service->id }}/edit"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form id="userDelete-form"
                                                action="/dashboard/koperasi-jasa/{{ $service->id }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item"
                                                    onclick="return confirm('Apa anda yakin?')">
                                                    <i class="bx bx-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                            @if ($service->koperasi->jasa->where('isUnggulan')->count() < 4 && !$service->isUnggulan)
                                                <form action="/dashboard/koperasi-jasa/{{ $service->id }}/unggulan"
                                                    method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="isUnggulan" value="1">
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-star me-1"></i> Unggulkan
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <h1 class="text-center mt-5 mb-5">Jasa not found</h1>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</section>
