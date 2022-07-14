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
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#card-um">UMKM</a></li>
                <li><a class="nav-link scrollto" href="#team">Struktur</a></li>

                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
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
                    {{-- @auth
                    <li>
                        <a class="getstarted" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li>
                        <a class="getstarted" href="/dashboard">
                            {{ Auth::user()->username }}
                        </a>
                    </li> --}}
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
