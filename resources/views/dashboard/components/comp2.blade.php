<div class="row py-3 mb-2">
    <div class="col-6">
        <h4 class="fw-bold">Daftar UMKM</h4>
    </div>

</div>

<div class="row g-4 mb-5">
    @foreach ($umkms as $umkm)
        <div class="col-lg-3 col-6">
            <div class="card h-100">
                @if ($umkm->image)
                    <img src="{{ asset('storage/' . $umkm->image) }}" class="img-fluid">
                @else
                    <img src="/img/temp/store-temp.png" class="img-fluid">
                @endif
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $umkm->name }}</h5>
                    <h6>{{ $umkm->city }}</h6>
                    <p class="card-text">{{ $umkm->product->count() }} Produk</p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center pt-3">
        {{ $umkms->links('components.paginator') }}
    </div>
    {{-- @foreach ($koperasis as $koperasi)
        <div class="col-lg-3 col-6">
            <div class="card h-100">
                @if ($umkm->image)
                    <img src="{{ asset('storage/' . $koperasi->image) }}" class="img-fluid">
                @else
                    <img src="/img/temp/store-temp.png" class="img-fluid">
                @endif
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $koperasi->name }}</h5>
                    <h6>{{ $koperasi->city }}</h6>
                    <p class="card-text">{{ $koperasi->product->count() }} Produk</p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center pt-3">
        {{ $koperasis->appends([
                'umkms' => $umkms->currentPage(),
            ])->links('components.paginator') }}
    </div> --}}


</div>
