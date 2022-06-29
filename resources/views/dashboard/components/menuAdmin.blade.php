<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase ">
        <span class="menu-header-text">User</span>
    </li>
    <li class="menu-item  {{ Request::is('dashboard/user*') ? 'active open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
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
        <span class="menu-header-text">UMKM & KOPERASI</span>
    </li>

    <li class="menu-item {{ Request::is('dashboard/umkm*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
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
    <li class="menu-item  {{ Request::is('dashboard/koperasi*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
            <div data-i18n="Account Settings">KOPERASI</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('dashboard/koperasi*') ? 'active' : '' }}">
                <a href="/dashbord/koperasi" class="menu-link">
                    <div data-i18n="Without menu">Data KOPERASI</div>
                </a>
            </li>
        </ul>

    </li>

</ul>
