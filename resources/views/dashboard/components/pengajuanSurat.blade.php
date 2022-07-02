<section id="form-pengajuan-surat">
    <h4 class="col-6 fw-bold py-3 mb-2"> Pengajuan Surat</h4>
    <div class="col-12">
        <div class="card mb-4">

            <div class="row">
                <div class="col-sm-7">
                    <h5 class="card-header">Perizinan Koperasi & UMKM</h5>
                    <div class="card-body">
                        <h4 class="fw-bold">Mau izin apa?</h4>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="/img/illustrations/user_interface_flatline.svg" height="140" />
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion mt-1 mb-1" id="accordions">
            <div class="card accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                        Perizinan <strong> &nbsp UMKM</strong>
                    </button>
                </h2>

                <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordions" style="">
                    <div class="accordion-body">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Pengajuan Surat Perizinan UMKM</h5> <small
                                        class="text-muted float-end">Pastikan
                                        data yang anda
                                        masukkan benar</small>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                        data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                        Perizinan <strong> &nbsp Koperasi</strong>
                    </button>
                </h2>
                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordions" style="">
                    <div class="accordion-body">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Pengajuan Surat</h5> <small class="text-muted float-end">Pastikan
                                        data yang anda
                                        masukkan benar</small>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        {{-- NIB/NIK --}}
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="nib">NIK</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text "><i class="bx bx-barcode"></i></span>
                                                    <input type="text" name="nib" class="form-control"
                                                        id="nib" placeholder="Nomor Induk Koperasi" value=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Name --}}
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name">Nama
                                                Koperasi</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text "><i
                                                            class="bx bx-store-alt"></i></span>
                                                    <input type="text" name="name" class="form-control "
                                                        id="name" placeholder="Nama"
                                                        aria-describedby="basic-icon-default-fullname2" value=""
                                                        required>
                                                    @error('name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Phonenumber --}}
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="phonenumber">Phone No</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                            class="bx bx-phone"></i></span>
                                                    <input type="text" name="phonenumber" id="phonenumber"
                                                        class="form-control phone-mask @error('phonenumber') is-invalid @enderror"
                                                        placeholder="+62" aria-label="658 799 8941"
                                                        aria-describedby="basic-icon-default-phone2" value=""
                                                        required>
                                                    @error('phonenumber')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Kategori Surat Izin --}}
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="name-koperasi">Kategori
                                                Perizinan</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text "><i
                                                            class='bx bx-receipt'></i></span>
                                                    <select class="form-select" id="name-koperasi">
                                                        <option selected="">Kategori Perizinan</option>
                                                        <option value="Akta Pendirian">Akta Pendirian</option>
                                                        <option value="Izin Usaha">Izin Usaha</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- tambahan --}}
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="description">Izin lain</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input type="hidden" name="description" id="description"
                                                        class="form-control phone-mask @error('description') is-invalid @enderror"
                                                        placeholder="Tulis disini izin lain yang anda butuhkan"
                                                        aria-describedby="basic-icon-default-address" value=""
                                                        required>
                                                    <trix-editor input="description"></trix-editor>
                                                    @error('description')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary"><span
                                                        class='bx bx-mail-send'></span> &nbsp; Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-3">

    </div>
    <div class="col-12 mb-5">
        <h4 class="col-6 fw-bold py-3 mb-2"><span class="text-muted fw-light">Data/</span> Pengajuan Surat</h4>
        <div class="card">
            <h5 class="card-header">Tabel Pengajuan Perizinan</h5>
            <form action="/dashboard/umkm" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>NIB</th>
                            <th>Nama</th>
                            <th>Phone No</th>
                            <th>Kategori Perizinan</th>
                            <th>Izin lain</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach (Auth::user()->izin as $izin)
                            <tr>
                                <td>{{ $izin->id }}</td>
                                <td><strong>{{ $izin->nib }}</strong></td>
                                <td>{{ $izin->name }}</td>
                                <td>{{ $izin->phonenumber }}</td>
                                <td><span
                                        class="badge bg-label-primary me-1"><strong>{{ $izin->category->category }}</strong></span>
                                </td>
                                <td>{!! $izin->description !!}</td>
                                <td>
                                    @if ($izin->status == 0)
                                        <div class="spinner-border spinner-border-sm text-warning" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div><span class="ms-2 badge bg-label-warning me-1">Pending</span>
                                    @elseif ($izin->status == 1)
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
                                                action="/dashboard/izin/surat/{{ $izin->id }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item"
                                                    onclick="return confirm('Apa anda yakin?')">
                                                    <i class="bx bx-x me-1"></i> Batalkan
                                                </button>
                                            </form>
                                            <a class="dropdown-item" target="_blank"
                                                @if ($izin->file) @else
                                                disabled @endif
                                                href="{{ asset('storage/' . $izin->file) }}"><i
                                                    class='bx bx-down-arrow-circle'></i>
                                                Download</a>
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
</section>
