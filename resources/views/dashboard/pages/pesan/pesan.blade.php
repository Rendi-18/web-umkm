<section>
    <div class="col-12">
        <h4 class="col-6 fw-bold py-3 mb-2">Pesan Pengunjung</h4>
        {{-- Flash --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <h5 class="card-header">Tabel Pesan Pengunjung</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Pengunjung</th>
                            <th>Email Pengunjung</th>
                            <th>Subject</th>
                            <th>Pesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if ($pesans->count())
                            @foreach ($pesans as $pesan)
                                <tr>
                                    <td>{{ $pesan->id }}</td>
                                    <td><strong>{{ $pesan->name }}</strong></td>
                                    <td>{{ $pesan->email }}</td>
                                    <td><span
                                            class="d-inline-block text-truncate align-middle">{{ $pesan->subject }}</span>
                                    </td>
                                    <td><span class="d-inline-block text-truncate align-middle">
                                            {{ $pesan->message }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form id="mail" action="/dashboard/pesan/{{ $pesan->id }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item"
                                                        onclick="return confirm('Apa anda yakin?')">
                                                        <i class="bx bx-trash me-1"></i> Hapus Pesan
                                                    </button>
                                                </form>
                                                <a class="dropdown-item" href="/dashboard/pesan/{{ $pesan->id }}">
                                                    <i class="bx bx-envelope me-1"></i> Detail
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <h1 class="text-center mt-5 mb-5">
                                Pesan not found :)
                            </h1>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
