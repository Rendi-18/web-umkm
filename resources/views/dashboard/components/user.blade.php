<!-- Table User -->
<div class="row">

    @if (session()->has('successUser'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successUser') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-lg tabel-user">
        <div class="card mb-4">
            <h5 class="card-header">Tabel User</h5>
            <form action="/dashboard/user" method="get" class="d-flex mx-4 mb-2">
                <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search"
                    aria-label="Search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>user</th>
                            <th>Email</th>
                            <th>Profile</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @if ($users->count())
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <strong>{{ $user->name }}</strong>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top"
                                                class="avatar avatar-xs pull-up img-container rounded-circle"
                                                title="{{ $user->name }}">

                                                {{-- <img src="/img/avatars/5.png" alt="Avatar" class="rounded-circle" /> --}}

                                                @if ($user->image)
                                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Avatar"
                                                        class="img-fluid img-fi border-0t">
                                                @else
                                                    <img src="/img/temp/user-temp.png" alt="Avatar"
                                                        class="img-fluid img-fit border-0">
                                                @endif
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                {{-- <a class="dropdown-item"
                                                    href="/dashboard/user/{{ $user->id }}/edit"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a> --}}
                                                <form id="userDelete-form" action="/dashboard/user/{{ $user->id }}"
                                                    method="post">
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
                            User not found :)
                        </h1>
                    @endif

                </table>
            </div>
        </div>
    </div>
</div>


<!--/ Hoverable Table rows -->
