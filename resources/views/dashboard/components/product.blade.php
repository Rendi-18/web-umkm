<section id="product-card" class="">
    <div class="row py-3 mb-4">
        <div class="col-lg-6">
            <h4 class="fw-bold">Produk Unggulan {{ $umkm->name }}</h4>
        </div>

    </div>

    @if (session()->has('successUnggulan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successUnggulan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        @if ($products->where('isUnggulan')->count())
            @foreach ($products->where('isUnggulan') as $product)
                <div class="col-lg-3 col-6 mb-3">
                    <div class="card h-100">
                        <div class="img-container img-container-prd card-img-top">
                            @if ($product->image)
                                <img class="" src="{{ asset('storage/' . $product->image) }}"
                                    alt="Card image cap">
                            @else
                                <img class="card-img-top" src="/img/temp/product-temp.png" alt="Card image cap">
                            @endif
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><span class="text-success"><i class="bx bx-money"></i>
                                </span>@currency($product->price)</p>
                            <form action="/dashboard/umkm-product/{{ $product->id }}/unggulan" method="post">
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
            <h4 class="text-center">Belum ada product unggulan :)</h4>
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
<section id="product-table" class="">
    <div class="row py-3 mb-4">
        <div class="col-6">
            <h4 class="fw-bold">Tabel Product</h4>
        </div>
        <div class="col-6 d-flex ">
            <a class="ms-auto" href="/dashboard/umkm/{{ $umkm->id }}/umkm-product/create">
                <button type="button" class="btn btn-primary ">
                    <i class="tf-icons bx bx-plus d-lg-none "></i><span class="d-none d-sm-block"><i
                            class="tf-icons bx bx-plus"></i>&nbsp; Tambah Produk</span>
                </button>
            </a>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Tabel Produk</h5>
        <form action="/dashboard/umkm/{{ $umkm->id }}/umkm-product" method="get" class="d-flex mx-4 mb-2">
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
                        <th>Name</th>
                        <th>Price</th>
                        <th>Weight</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($products->count())
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up img-container rounded" title=""
                                            data-bs-original-title="{{ $product->name }}">
                                            @if ($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Avatar"
                                                    class="img-fluid img-fi border-0t">
                                            @else
                                                <img src="/img/temp/product-temp.png" alt="Avatar"
                                                    class="img-fluid img-fit border-0">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">{{ $product->name }}</span>
                                    @if ($product->isUnggulan)
                                        <span class="badge bg-label-danger me-1">Unggulan</span>
                                    @endif
                                </td>
                                <td>@currency($product->price)</td>
                                <td>{{ $product->weight }} Kg</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i
                                                class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="/dashboard/umkm-product/{{ $product->id }}/edit"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <form id="userDelete-form"
                                                action="/dashboard/umkm-product/{{ $product->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item"
                                                    onclick="return confirm('Apa anda yakin?')">
                                                    <i class="bx bx-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                            @if ($product->umkm->product->where('isUnggulan')->count() < 4 && !$product->isUnggulan)
                                                <form action="/dashboard/umkm-product/{{ $product->id }}/unggulan"
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
                        <h1 class="text-center mt-5 mb-5">Product not found</h1>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
