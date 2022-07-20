<section id="regist-koperasi">
    <h4 class="col-6 fw-bold py-3 mb-2">Agenda Dinas</h4>
    <div class="col-12 mb-5">
        <div class="card">
            <h5 class="card-header">Tabel Agenda Dinas</h5>
            <form action="/dashboard/agenda" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Agenda</th>
                            <th>Lokasi</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($agendas->count())
                            @foreach ($agendas as $agenda)
                                <tr>
                                    <td>{{ $agenda->id }}</td>
                                    <td>{{ $agenda->name }}</td>
                                    <td>{{ $agenda->location }}</td>
                                    <td>
                                        <span class="badge bg-label-primary me-1">
                                            <strong>{{ date('d F Y', strtotime($agenda->date)) }}</strong>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="/dashboard/agenda/{{ $agenda->id }}/edit"><i
                                                        class='bx bx-edit  me-1'></i>
                                                    Edit</a>
                                                <form id="userDelete-form"
                                                    action="/dashboard/agenda/{{ $agenda->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-x me-1"></i> Hapus
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h1 class="text-center mb-5 mt-5">Agenda not found :)</h1>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg mb-4">
                    <div class="card mb-4">
                        <h5 class="card-header">Form Penambahan Agenda</h5>

                        <div class="card-body">
                            <form class="" action="/dashboard/agenda" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                {{-- Name --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="name">Nama Agenda</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text "><i class="bx bx-bookmarks"></i></span>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="Nama" aria-describedby="basic-icon-default-fullname2"
                                                value="{{ old('name') }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- lokasi --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="lokasi">Lokasi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-map-pin"></i></span>
                                            <input type="text" name="location" id="location"
                                                class="form-control phone-mask @error('location') is-invalid @enderror"
                                                placeholder="Lokasi" aria-label="location"
                                                aria-describedby="basic-icon-default-phone2"
                                                value="{{ old('location') }}" required>
                                            @error('location')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- Tanggal Pelaksanaan --}}
                                <div class="mb-3 row">
                                    <label for="html5-datetime-local-input" class="col-sm-2 col-form-label">Tanggal
                                        Pelaksanaan</label>
                                    <div class="col-md-10">
                                        <input class="form-control" name="date" type="datetime-local"
                                            value={{ old('date') }} id="html5-datetime-local-input">
                                        @error('date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Foto Agenda --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="description">Foto Agenda</label>
                                    <div class="col-sm-10 px-3 pl-5">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <div class="img-container img-container-sm rounded">
                                                <img src="/img/temp/agenda-temp.png" alt="user-avatar"
                                                    class="d-block img-fluid img-fit img-preview mx-auto d-block"
                                                    id="uploadedAvatar">
                                            </div>

                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4"
                                                    tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="hidden" name="oldImage" value="">
                                                    <input type="file" id="upload"
                                                        class="account-file-input @error('image') is-invalid @enderror"
                                                        accept="image/png, image/jpeg" name="image" hidden
                                                        onchange="previewImageUmkm()">
                                                    @error('image')
                                                        <div class="invalid-feedback text-light">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </label>
                                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- Isi --}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="description">Isi Agenda</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge flex-column">
                                            <input type="hidden" name="content" id="content"
                                                class="form-control phone-mask @error('content') is-invalid @enderror"
                                                placeholder="Tulis disini isi kegiatan"
                                                aria-describedby="basic-icon-default-address"
                                                value="{{ old('content') }}" required>
                                            <trix-editor input="content"></trix-editor>
                                            @error('content')
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
                                                class='bx bx-mail-send'></span>
                                            &nbsp;
                                            Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
