<div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
            </div>
        </form>

        <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{asset('stisla/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in 5 min ago</div>
                    <a href="features-profile.html" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <a href="features-activities.html" class="dropdown-item has-icon">
                        <i class="fas fa-bolt"></i> Activities
                    </a>
                    <a href="features-settings.html" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i> Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    {{-- SIDEBAR --}}
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="#">Read-It</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="#">R-It</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="active"><a class="nav-link" href="/buku"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                
                <li class="menu-header">Your Personal Library</li>
                {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                        <span>Components</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="components-article.html">Article</a></li>
                    </ul>
                </li> --}}
                <li><a class="nav-link" href="{{route('buku.create')}}"><i class="fas fa-plus"></i> <span>Tambah Buku</span></a></li>

                <li class="menu-header">Perpustakaan Fisik</li>
                <li><a class="nav-link" href="{{route('pinjaman.index')}}"><i class="fas fa-address-book"></i> <span>Data Pinjaman Buku Fisik Anda</span></a></li>
                <li><a class="nav-link" href="{{route('pinjaman.create')}}"><i class="fas fa-plus"></i> <span>Ajukan Pinjaman Buku Fisik</span></a></li>
            </ul>

            {{-- <div class="m-2 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-file-alt"></i> Documentation
                </a>
            </div> --}}
        </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('kontenHeader')</h1>
            </div>

            <div class="section-body">
                @yield('konten')
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2018 
            {{-- <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a> --}}
        </div>
        <div class="footer-right">
            2.3.0
        </div>
    </footer>
</div>
