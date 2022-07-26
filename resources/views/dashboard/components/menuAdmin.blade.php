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
    {{ Request::is('dashboard/website*') ? 'active open' : '' }}
    {{ Request::is('dashboard/agenda*') ? 'active open' : '' }} 
    {{ Request::is('dashboard/pegawai*') ? 'active open' : '' }}
    {{ Request::is('dashboard/pesan*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-globe"></i>
            <div data-i18n="Website Setting">Website</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/website*') ? 'active' : '' }}"">
                <a href="/dashboard/website" class="menu-link">
                    <div data-i18n="Without menu">Website Setting</div>
                </a>
            </li>
        </ul>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/agenda*') ? 'active' : '' }}">
                <a href="/dashboard/agenda" class="menu-link">
                    <div data-i18n="Without menu">Agenda</div>
                </a>
            </li>
        </ul>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/pegawai*') ? 'active' : '' }}">
                <a href="/dashboard/pegawai" class="menu-link">
                    <div data-i18n="Without menu">Pegawai</div>
                </a>
            </li>
        </ul>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/pesan*') ? 'active' : '' }}">
                <a href="/dashboard/pesan" class="menu-link">
                    <div data-i18n="Without menu">Pesan Pengunjung</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-header small text-uppercase ">
        <span class="menu-header-text">User</span>
    </li>
    <li class="menu-item  {{ Request::is('dashboard/user*') ? 'active open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user-circle"></i>
            <div data-i18n="Account Settings">Users</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/user*') ? 'active' : '' }}"">
                <a href="/dashboard/user" class="menu-link">
                    <div data-i18n="Without menu">Data User</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">UMKM</span>
    </li>

    <li class="menu-item {{ Request::is('dashboard/umkm*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-store"></i>
            <div data-i18n="Account Settings">UMKM</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/umkm*') ? 'active' : '' }}">
                <a href="/dashboard/umkm" class="menu-link">
                    <div data-i18n="Without menu">Data UMKM</div>
                </a>
            </li>
        </ul>
    </li>
    {{-- <li class="menu-item  {{ Request::is('dashboard/koperasi*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-store-alt"></i>
            <div data-i18n="Account Settings">KOPERASI</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/koperasi*') ? 'active' : '' }}">
                <a href="/dashboard/koperasi" class="menu-link">
                    <div data-i18n="Without menu">Data KOPERASI</div>
                </a>
            </li>
        </ul>
    </li> --}}
    <li class="menu-item {{ Request::is('dashboard/pengajuan*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-list-check"></i>
            <div data-i18n="Account Settings">Pengajuan</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/pengajuan*') ? 'active' : '' }}">
                <a href="/dashboard/pengajuan" class="menu-link">
                    <div data-i18n="Without menu">Data Pengajuan</div>
                </a>
            </li>
        </ul>
    </li>


</ul>
