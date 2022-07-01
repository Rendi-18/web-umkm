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

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">UMKM</span>
    </li>

    @foreach (Auth::user()->umkm as $umkm)
        <li class="menu-item {{ Request::is('dashboard/umkm/' . $umkm->id . '*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">U{{ $umkm->name }}</div>
            </a>
            <ul class="menu-sub">
                <li
                    class="menu-item
                    {{ Request::is('dashboard/umkm/' . $umkm->id . '/umkm-profile') ? 'active' : '' }}
                    {{ $title == 'profile' ? 'active' : '' }}
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
                    {{ $title == 'product' ? 'active' : '' }}
                    ">
                    <a href="/dashboard/umkm/{{ $umkm->id }}/umkm-product" class="menu-link">
                        <div data-i18n="Without menu">Product</div>
                    </a>
                </li>
            </ul>
        </li>
    @endforeach
</ul>
