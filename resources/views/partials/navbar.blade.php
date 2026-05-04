<nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll" style="padding-top: clamp(0.5rem, 2vw, 1.5rem) !important; padding-bottom: clamp(0.5rem, 2vw, 1.5rem) !important;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/LogoTM.png') }}" style="height: clamp(35px, 8vw, 70px); width: auto;" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                <li class="nav-item px-3 px-xl-4">
                    <a class="nav-link fw-medium" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item px-3 px-xl-4">
                    <a class="nav-link fw-medium" href="{{ route('products') }}">Produk</a>
                </li>
                <li class="nav-item px-3 px-xl-4">
                    <a class="nav-link fw-medium" href="{{ route('about') }}">Tentang</a>
                </li>
                <li class="nav-item px-3 px-xl-4">
                    <a class="nav-link fw-medium" href="{{ route('contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
