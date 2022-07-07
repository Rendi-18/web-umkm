{{-- @extends('layouts.dashboard')
@section('content')
    <!-- Table UMKM -->
    <div class="container-xxl flex-grow-1 container-p-y">
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
    </div>

@endsection --}}
