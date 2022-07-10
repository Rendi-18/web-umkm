<section id="pegawai-table" class="">
    <div class="row py-3 mb-4">
        <div class="col-6">
            <h4 class="fw-bold">Data Pegawai</h4>
        </div>
        <div class="col-6 d-flex ">
            <a class="ms-auto" href="/dashboard/pegawai/create">
                <button type="button" class="btn btn-primary ">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah Data Pegawai
                </button>
            </a>
        </div>
    </div>
    <div class="card">
        <h5 class="card-header">Tabel Data Pegawai</h5>
        <form action="/dashboard/pegawai" method="get" class="d-flex mx-4 mb-2">
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
                        <th>Klasifikasi</th>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Jabatan/Golongan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($pegawais->count())
                        @foreach ($pegawais as $pegawai)
                            <tr>
                                <td>{{ $pegawai->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up img-container rounded" title=""
                                            data-bs-original-title="{{ $pegawai->name }}">
                                            @if ($pegawai->image)
                                                <img src="{{ asset('storage/' . $pegawai->image) }}" alt="Avatar"
                                                    class="img-fluid img-fi border-0t">
                                            @else
                                                <img src="../img/avatars/blank_avatars.png" alt="Avatar"
                                                    class="img-fluid img-fit border-0">
                                            @endif
                                        </li>
                                    </ul>
                                </td>
                                <td><span class="badge bg-label-primary me-1">{{ $pegawai->classification }}</span>
                                </td>
                                <td>{{ $pegawai->nip }}</td>
                                <td>{{ $pegawai->name }}</td>
                                <td>{{ $pegawai->position }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i
                                                class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="/dashboard/pegawai/{{ $pegawai->id }}/edit"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <form id="userDelete-form" action="/dashboard/pegawai/{{ $pegawai->id }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item"
                                                    onclick="return confirm('Apa anda yakin?')">
                                                    <i class="bx bx-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <h1 class="text-center mt-5 mb-5">Pegawai not found :)</h1>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
