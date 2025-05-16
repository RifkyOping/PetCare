<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false">
                <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                Dokter
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ url('/spesialis') }}">Dokter Spesialis</a>
                    <a class="nav-link" href="{{ url('/umum') }}">Dokter Umum</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-cat"></i></div>
                    Peliharaan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    @foreach ($dataHewan as $d)
                        <a class="nav-link" href="{{ route('hewan.jenis', ['jenis' => $d->jenis]) }}">{{ $d->jenis }}</a>
                    @endforeach
                    <a class="nav-link" href=""><i class="fas fa-plus"></i></a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="{{ url('/login') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-sign-in-alt"></i></div>
                Login
            </a>
            <a class="nav-link" href="{{ route('logout') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                Logout
            </a>
            {{-- <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form> --}}
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as : Admin</div>
    </div>
</nav>
