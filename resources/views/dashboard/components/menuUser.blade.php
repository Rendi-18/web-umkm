<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('dashboard/profile') ? 'active open' : '' }}">
        <a href="/dashboard/profile" class="menu-link menu-toggle ">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Account Settings">Account Settings</div>
        </a>
        <ul class="menu-sub ">
            <li class="menu-item {{ Request::is('dashboard/profile') ? 'active' : '' }}">
                <a href="/dashboard/profile" class="menu-link ">
                    <div data-i18n="Account">Account</div>
                </a>
            </li>
        </ul>
    </li>
    <li
        class="menu-item
    {{ Request::is('dashboard/izin*') ? 'active open' : '' }}
    {{ Request::is('dashboard/register/umkm') ? 'active open' : '' }}
    {{-- {{ Request::is('dashboard/register/koperasi') ? 'active open' : '' }} --}}
    ">
        <a href="/dashboard/profile" class="menu-link menu-toggle ">
            <i class="menu-icon tf-icons bx bx-paper-plane"></i>
            <div data-i18n="Pengajuan">Pengajuan</div>
        </a>
        <ul class="menu-sub ">
            <li class="menu-item {{ Request::is('dashboard/izin*') ? 'active' : '' }}">
                <a href="/dashboard/izin/surat" class="menu-link ">
                    <div data-i18n="Pengajuan Surat">Pengajuan Surat</div>
                </a>
            </li>
        </ul>
        <ul class="menu-sub ">
            <li class="menu-item {{ Request::is('dashboard/register/umkm') ? 'active' : '' }}">
                <a href="/dashboard/register/umkm" class="menu-link ">
                    <div data-i18n="Pengajuan Surat">Pengajuan UMKM</div>
                </a>
            </li>
        </ul>
        {{-- <ul class="menu-sub ">
            <li class="menu-item {{ Request::is('dashboard/register/koperasi') ? 'active' : '' }}">
                <a href="/dashboard/register/koperasi" class="menu-link ">
                    <div data-i18n="Pengajuan Surat">Pengajuan Koperasi</div>
                </a>
            </li>
        </ul> --}}
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">UMKM</span>
    </li>

    @if (Auth::user()->umkm->where('status', 1)->count())
        @foreach (Auth::user()->umkm->where('status', 1) as $umkm)
            <li class="menu-item {{ Request::is('dashboard/umkm/' . $umkm->id . '/*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-store"></i>
                    <div data-i18n="Account Settings">{{ $umkm->name }}</div>
                </a>
                <ul class="menu-sub">
                    <li
                        class="menu-item
                    {{ Request::is('dashboard/umkm/' . $umkm->id . '/umkm-profile') ? 'active' : '' }}
                    ">
                        <a href="/dashboard/umkm/{{ $umkm->id }}/umkm-profile" class="menu-link">
                            <div data-i18n="Without menu">Profile</div>
                        </a>
                    </li>
                </ul>
                <ul class="menu-sub">
                    <li
                        class="menu-item
                    {{ Request::is('dashboard/umkm/' . $umkm->id . '/umkm-product') ? 'active' : '' }}
                    ">
                        <a href="/dashboard/umkm/{{ $umkm->id }}/umkm-product" class="menu-link">
                            <div data-i18n="Without menu">Product</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endforeach
    @else
        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-no-entry"></i>
                <div data-i18n="Analytics">Anda Belum Memiliki UMKM</div>
            </a>
        </li>
    @endif

    {{-- <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Koperasi</span>
    </li>

    @if (Auth::user()->koperasi->where('status', 1)->count())
        @foreach (Auth::user()->koperasi->where('status', 1) as $koperasi)
            <li
                class="menu-item {{ Request::is('dashboard/koperasi/' . $koperasi->id . '*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-store-alt"></i>
                    <div>{{ $koperasi->name }}</div>
                </a>
                <ul class="menu-sub">
                    <li
                        class="menu-item
                    {{ Request::is('dashboard/koperasi/' . $koperasi->id . '/koperasi-profile') ? 'active' : '' }}
                    ">
                        <a href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-profile" class="menu-link">
                            <div data-i18n="Without menu">Profile</div>
                        </a>
                    </li>
                </ul>
                <ul class="menu-sub">
                    <li
                        class="menu-item
                    {{ Request::is('dashboard/koperasi/' . $koperasi->id . '/koperasi-product') ? 'active' : '' }}
                    ">
                        <a href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-product" class="menu-link">
                            <div data-i18n="Without menu">Product</div>
                        </a>
                    </li>
                </ul>
                <ul class="menu-sub">
                    <li
                        class="menu-item
                    {{ Request::is('dashboard/koperasi/' . $koperasi->id . '/koperasi-jasa') ? 'active' : '' }}
                    ">
                        <a href="/dashboard/koperasi/{{ $koperasi->id }}/koperasi-jasa" class="menu-link">
                            <div data-i18n="Without menu">Layanan</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endforeach
    @else
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-no-entry"></i>
                <div data-i18n="Analytics">Anda Belum Memiliki Koperasi</div>
            </a>
        </li>
    @endif --}}
</ul>
