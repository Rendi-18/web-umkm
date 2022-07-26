<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ Request::is('home') ? '' : 'header-search' }}">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <a href="/">{{ $website[0]->sitename }}</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                @if (Request::is('/'))
                    <li><a class="nav-link scrollto {{ Request::is('home') ? 'active' : '' }}" href="#hero">Home</a>
                    </li>
                    <li><a class="nav-link scrollto" href="/agenda">Agenda</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="/search/umkm">UMKM & Koperasi</a></li>
                    <li><a class="nav-link scrollto" href="/pegawai">Kepegawaian</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                @else
                    <li><a class="nav-link scrollto " href="/">Home</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('agenda*') ? 'active' : '' }}"
                            href="/agenda">Agenda</a></li>
                    <li><a class="nav-link scrollto" href="/#about">About</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('search*') ? 'active' : '' }}"
                            href="/search/umkm">UMKM</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('pegawai*') ? 'active' : '' }}"
                            href="/pegawai">Kepegawaian</a></li>
                    <li><a class="nav-link scrollto " href="/#contact">Contact</a></li>
                @endif

                @auth
                    <li class="dropdown">
                        <a href="#">
                            <span>{{ Auth::user()->username }}</span>
                            <i class='bi bi-chevron-down bx-burst'></i>
                        </a>
                        <ul>

                            <li><a href="/dashboard">
                                    Dashboard
                                </a>
                            </li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @else
                    <li>
                        <a class="getstarted" href="/login">Login</a>
                    </li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
