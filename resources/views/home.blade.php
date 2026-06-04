@extends('layouts.app')

@section('title', 'Tebu Mas Gresik')

@section('content')

<style>
    /* Hero Section Styling */
    section[style*="padding-top: 0"] {
        background: transparent;
        padding-top: 2rem !important;
        padding-bottom: 3rem !important;
    }

    .hero-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 3rem;
        min-height: 560px;
    }

    .hero-image-col {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1 1 60%;
    }

    .hero-img {
        width: clamp(480px, 55vw, 760px);
        max-width: 100%;
        height: auto;
        object-fit: contain;
    }

    .hero-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1.5rem;
        flex: 1 1 40%;
        max-width: 500px;
    }

    .hero-subtitle {
        color: #F1A501;
        font-size: clamp(0.85rem, 2vw, 1rem);
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin: 0;
    }

    .hero-title {
        font-size: clamp(1.8rem, 5vw, 2.8rem);
        font-weight: 700;
        line-height: 1.2;
        color: #14183E;
        margin: 0.5rem 0;
        word-spacing: 0.05em;
    }

    .hero-description {
        font-size: clamp(0.95rem, 2vw, 1.1rem);
        line-height: 1.7;
        color: #555;
        margin: 0;
        font-weight: 500;
    }

    .hero-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: 0.5rem;
    }

    .hero-buttons .btn {
        font-size: clamp(0.9rem, 2vw, 1rem);
        padding: clamp(0.6rem, 2vw, 0.75rem) clamp(1.2rem, 3vw, 1.5rem);
        border-radius: 6px;
        font-weight: 600;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .hero-buttons .btn-primary {
        background: linear-gradient(135deg, #F1A501 0%, #DF6951 100%);
        border: none;
        box-shadow: 0 4px 15px rgba(241, 165, 1, 0.3);
    }

    .hero-buttons .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(241, 165, 1, 0.4);
    }

    .hero-buttons .btn-outline-primary {
        border: 2px solid #F1A501;
        color: #F1A501;
        background: transparent;
    }

    .hero-buttons .btn-outline-primary:hover {
        background: #F1A501;
        color: white;
    }

    .destination-shape {
        position: absolute;
        top: 24px;

    /* Service cards — reduce visual footprint to a professional size */
    .service-section .col-lg-4 {
        display: flex;
        justify-content: center;
    }

    .service-section .service-card {
        width: 100%;
        max-width: 360px;
        padding: 1.1rem 1.25rem;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(20,24,62,0.06);
        transition: transform .18s ease, box-shadow .18s ease;
        display: flex;
        flex-direction: column;
        gap: .75rem;
        align-items: stretch;
        min-height: 300px;
    }

    .service-section .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 26px rgba(20,24,62,0.08);
    }

    .service-image-wrapper {
        text-align: center;
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }

    .service-image-wrapper img {
        width: 120px;
        height: auto;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    .service-content h4 {
        font-size: 1.08rem;
        margin: 0 0 0.35rem 0;
        font-weight: 700;
        color: #14183E;
    }

    .service-content p {
        font-size: 0.95rem;
        color: #505050;
        margin: 0 0 0.6rem 0;
        line-height: 1.5;
    }

    .service-tags span {
        display: inline-block;
        font-size: 0.78rem;
        padding: 0.25rem 0.45rem;
        background: rgba(20,24,62,0.04);
        border-radius: 6px;
        margin-right: 6px;
        color: #333;
    }

    @media (max-width: 768px) {
        .service-section .service-card {
            max-width: 320px;
            padding: 0.9rem 1rem;
            min-height: auto;
        }

        .service-image-wrapper img {
            width: 88px;
        }

        .service-content h4 { font-size: 1rem; }
        .service-content p  { font-size: 0.92rem; }
    }
        right: -60px;
        width: 220px;
        opacity: 0.16;
        pointer-events: none;
        transform: translateY(0);
    }

    .service-btn {
        display: inline-block;
        background: linear-gradient(135deg, #F1A501 0%, #DF6951 100%);
        color: white !important;
        padding: 0.65rem 1.5rem;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(241, 165, 1, 0.3);
    }

    .service-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(241, 165, 1, 0.4);
        color: white !important;
    }

    @media (max-width: 1200px) {
        .destination-shape {
            display: none;
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        section[style*="padding-top: 0"] {
            padding-top: 1.5rem !important;
            padding-bottom: 2.5rem !important;
        }

        .hero-container {
            min-height: 400px;
            gap: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        section[style*="padding-top: 0"] {
            padding-top: 1rem !important;
            padding-bottom: 2rem !important;
        }

        .hero-container {
            flex-direction: column;
            min-height: auto;
            text-align: center;
        }

        .hero-image-col {
            order: -1;
        }

        .hero-content {
            align-items: center;
        }

        .hero-title {
            margin-top: 1rem;
        }

        .hero-buttons {
            justify-content: center;
            margin-top: 1rem;
        }
    }

    @media (max-width: 480px) {
        section[style*="padding-top: 0"] {
            padding-top: 0.75rem !important;
            padding-bottom: 1.5rem !important;
        }

        .hero-img {
            width: clamp(280px, 70vw, 360px);
            max-width: 100%;
        }

        .hero-buttons {
            flex-direction: column;
            width: 100%;
        }

        .hero-buttons .btn {
            width: 100%;
        }
    }

    /* About stats: make primary number (e.g. 30+) white */
    .about-stat-card.primary h3,
    .about-stat-card.primary strong {
        color: #ffffff !important;
    }
</style>

<!-- ============================================-->
<!-- <section> Hero Section ============================-->
<section style="padding-top: 0; padding-bottom: 1.5rem;">
    <div class="container">
        <div class="hero-container">
            <!-- Image Column -->
            <div class="hero-image-col">
                <img class="hero-img" src="{{ asset('img/hero/prod.gif') }}" alt="Songkok Berkualitas Tebu Mas" />
            </div>

            <!-- Content Column -->
            <div class="hero-content">
                <p class="hero-subtitle">{{ $heroTitle ?? 'Produsen Songkok Berkualitas dari Gresik' }}</p>
                <h1 class="hero-title">{{ $heroSubtitle ?? 'Songkok Premium, Untuk Ibadah & Acara Resmi' }}</h1>
                <p class="hero-description">{{ $heroDescription ?? 'Tebu Mas menyediakan songkok AC, non AC, dan full AC.' }}
                {{ $heroDescriptionCont ?? 'Dengan bahan pilihan dan jahitan rapi.' }}
                {{ $heroDescriptionEnd ?? 'Cocok untuk penggunaan harian maupun acara resmi.' }}</p>

                <div class="hero-buttons">
                    <a class="btn btn-primary" href="{{ route('products') }}" role="button">Lihat Produk</a>
                    <a class="btn btn-outline-primary" href="#tentang-kami" role="button">Tentang Kami</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <iframe id="popupVideoIframe" class="rounded" style="width:100%;max-height:500px;" height="500px" src="" data-src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================ -->
<!-- Services Section -->
<!-- ============================================ -->
<section class="service-section pt-5 pt-md-9" id="service">
    <div class="container">

        <!-- Header -->
        <div class="service-header text-center">
            <h5>{{ $servicesLabel ?? 'Koleksi Songkok Tebu Mas' }}</h5>
            <h3>{{ $servicesTitle ?? 'Pilih Jenis Songkok Sesuai Kebutuhan Anda' }}</h3>
        </div>

        <!-- Cards -->
        <div class="row g-4 justify-content-center service-slider">

            <!-- CARD 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-image-wrapper">
                        <img src="{{ asset('img/category/prodlm.png') }}" alt="Songkok Non AC">
                    </div>

                    <div class="service-content">
                        <h4>Songkok Non AC</h4>

                        <p>
                            Songkok polos tanpa ventilasi dengan tampilan elegan dan formal.
                            Cocok digunakan untuk ibadah, acara resmi, maupun penggunaan harian.
                        </p>

                        <div class="service-tags">
                            <span>Formal</span>
                            <span>Padat</span>
                            <span>Tahan Lama</span>
                        </div>

                        <a href="{{ route('products') }}" class="service-btn">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-image-wrapper">
                        <img src="{{ asset('img/category/ac.png') }}" alt="Songkok AC">
                    </div>

                    <div class="service-content">
                        <h4>Songkok AC</h4>

                        <p>
                            Memiliki ventilasi udara pada bagian tertentu sehingga lebih nyaman,
                            adem, dan cocok digunakan untuk aktivitas harian.
                        </p>

                        <div class="service-tags">
                            <span>Nyaman</span>
                            <span>Ventilasi</span>
                            <span>Populer</span>
                        </div>

                        <a href="{{ route('products') }}" class="service-btn">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">

                    <div class="service-image-wrapper">
                        <img src="{{ asset('img/category/fullac.png') }}" alt="Songkok Full AC">
                    </div>

                    <div class="service-content">
                        <h4>Songkok Full AC</h4>

                        <p>
                            Menggunakan ventilasi penuh agar sirkulasi udara maksimal.
                            Memberikan kenyamanan terbaik untuk aktivitas outdoor maupun iklim panas.
                        </p>

                        <div class="service-tags">
                            <span>Premium</span>
                            <span>Adem</span>
                            <span>Full Jaring</span>
                        </div>

                        <a href="{{ route('products') }}" class="service-btn">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================ -->
<!-- Tentang Kami -->
<!-- ============================================ -->
<section class="about-section" id="tentang-kami">
    <div class="container">

        <div class="about-wrapper">
            <!-- ROW 1 -->
<div class="about-row top-row">

    <!-- IMAGE -->
    <div class="about-image-side">

        <div class="about-image-card no-bg">

            <div class="about-badge">
                EST. 1993
            </div>

            <img
                src="{{ asset('img/category/Songkok.png') }}"
                alt="Tebu Mas Gresik"
            >

        </div>

    </div>

    <!-- CONTENT -->
    <div class="about-content-side">

        <div class="about-label">
            TENTANG KAMI
        </div>

        <h2>
            Mengenal Lebih Dekat
            Tebu Mas Gresik
        </h2>

        <div class="about-divider"></div>

        <p>
            Sejak tahun 1993, Tebu Mas Gresik menghadirkan songkok berkualitas
            dengan mengutamakan kenyamanan, kerapian jahitan, dan ketahanan produk.
        </p>

        <p>
            Setiap produk dibuat menggunakan bahan pilihan dan proses produksi
            yang teliti untuk menghasilkan kualitas terbaik.
        </p>

        <div class="about-stats">

            <div class="about-stat-card primary">
                <h3>30+</h3>
                <span>Tahun Pengalaman</span>
            </div>

            <div class="about-stat-card secondary">
                <h3>100%</h3>
                <span>Handmade Quality</span>
            </div>

        </div>

        <a href="{{ route('products') }}" class="about-btn">
            Jelajahi Koleksi
        </a>

    </div>

</div>

<!-- ROW 2 -->
<div class="about-row bottom-row">

    <!-- CONTENT -->
    <div class="about-content-side second-content">

        <div class="about-label">
            KOMITMEN KAMI
        </div>

        <h2>
            Tradisi, Kualitas,
            dan Kepercayaan
        </h2>

        <div class="about-divider"></div>

        <p>
            Dengan pengalaman yang terus terjaga, Tebu Mas menghadirkan
            desain elegan serta kualitas konsisten untuk berbagai kebutuhan.
        </p>

        <div class="about-features">

            <div class="about-feature-item">
                <div class="about-feature-icon">✓</div>
                <div>
                    <h5>Bahan Premium</h5>
                    <p>Kualitas bahan terbaik untuk kenyamanan maksimal.</p>
                </div>
            </div>

            <div class="about-feature-item">
                <div class="about-feature-icon">✓</div>
                <div>
                    <h5>Jahitan Rapi</h5>
                    <p>Dibuat dengan proses teliti dan tahan lama.</p>
                </div>
            </div>

        </div>

    </div>

    <!-- IMAGE -->
    <div class="about-image-side second-image">

        <div class="about-image-card no-bg">

            <img
                src="{{ asset('img/category/labelpg.png') }}"
                alt="Label Tebu Mas"
            >

        </div>

    </div>

</div>

        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================-->
<!-- <section> Destinations Section ============================-->
<section class="pt-5" id="destination">
    <div class="container">
        <div class="destination-shape d-none d-xl-block">
            <img src="{{ asset('img/dest/shape.svg') }}" alt="destination" />
        </div>
        <div class="mb-7 text-center">
            <h5 class="text-secondary">{{ $destinationLabel ?? 'Keunggulan Kami' }}</h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">{{ $destinationTitle ?? 'Kenapa Tebu Mas Gresik Jadi Pilihan' }}</h3>
        </div>

        <div class="row destination-slider">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card destination-card text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Jht.png') }}" width="75" alt="Service" class="d-block mx-auto mb-3" />
                  <h4 class="mb-3">Jahitan Rapi & Handmade</h4>
                  <p class="mb-0 fw-medium">Setiap songkok dibuat secara handmade dengan jahitan rapi dan teliti sehingga lebih awet dan nyaman digunakan.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card destination-card text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Nyaman.png') }}" width="75" alt="Service" class="d-block mx-auto mb-3" />
                  <h4 class="mb-3">Nyaman Digunakan Seharian</h4>
                  <p class="mb-0 fw-medium">Ringan, pas di kepala, dan tetap nyaman untuk ibadah maupun aktivitas sehari-hari.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card destination-card text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Elegan.png') }}" width="75" alt="Service" class="d-block mx-auto mb-3" />
                  <h4 class="mb-3">Desain Sederhana dan Elegan</h4>
                  <p class="mb-0 fw-medium">Tampilan yang tidak berlebihan dan tetap cocok digunakan di berbagai acara.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card destination-card text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Pres.png') }}" width="75" alt="Service" class="d-block mx-auto mb-3" />
                  <h4 class="mb-3">Ukuran Lengkap dan Presisi</h4>
                  <p class="mb-0 fw-medium">Tersedia berbagai ukuran yang pas sehingga lebih nyaman saat digunakan.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================-->
<!-- <section> Kepercayaan Pelanggan Section ============================-->
<section id="kepercayaan">
    <div class="container">
        <div class="text-center trust-header">
            <span class="trust-eyebrow">KEPERCAYAAN PELANGGAN</span>
            <h2>Dipercaya Pelanggan dari Berbagai Daerah</h2>
            <p>Kepercayaan pelanggan adalah aset paling berharga kami. Sejak 1993, kami terus berinovasi dengan produksi lokal dan pengiriman ke seluruh nusantara.</p>
            <div class="trust-divider"></div>
        </div>

        <div class="row g-4 trust-stat-grid">
            <div class="col-6 col-lg-3">
                <article class="trust-stat-card">
                    <strong style="color: white;">30+</strong>
                    <span>TAHUN BERPENGALAMAN</span>
                    <small>Handmade sejak 1993</small>
                </article>
            </div>
            <div class="col-6 col-lg-3">
                <article class="trust-stat-card">
                    <strong>10k+</strong>
                    <span>PRODUK TERKIRIM</span>
                    <small>Digunakan ribuan pelanggan</small>
                </article>
            </div>
            <div class="col-6 col-lg-3">
                <article class="trust-stat-card">
                    <strong>30+</strong>
                    <span>KOTA PENGIRIMAN</span>
                    <small>Pengiriman ke berbagai daerah</small>
                </article>
            </div>
            <div class="col-6 col-lg-3">
                <article class="trust-stat-card">
                    <strong>100%</strong>
                    <span>LOKAL GRESIK</span>
                    <small>Produksi lokal berkualitas</small>
                </article>
            </div>
        </div>

        <div class="row align-items-stretch g-4 trust-layout mb-4">
            <div class="col-12 col-lg-5">
                <article class="trust-panel">
                    <p class="trust-panel-tag">Komitmen Kami</p>
                    <h3>Menjaga kualitas, keamanan, dan kepercayaan dari awal sampai tujuan</h3>
                    <p class="trust-panel-copy">Kami fokus pada proses yang rapi, pengemasan profesional, dan pelayanan yang konsisten agar setiap order sampai dengan aman dan terpercaya.</p>
                    <div class="trust-feature-list">
                        <article class="trust-feature-card">
                            <div class="trust-feature-icon">✓</div>
                            <div>
                                <h4>Pengiriman Rutin</h4>
                                <p>Pengiriman ke berbagai daerah dengan jaminan keamanan paket.</p>
                            </div>
                        </article>
                        <article class="trust-feature-card">
                            <div class="trust-feature-icon">✓</div>
                            <div>
                                <h4>Proses Packing Profesional</h4>
                                <p>Setiap paket dikemas dengan hati-hati agar produk sampai aman.</p>
                            </div>
                        </article>
                        <article class="trust-feature-card">
                            <div class="trust-feature-icon">✓</div>
                            <div>
                                <h4>Kualitas Terjamin</h4>
                                <p>Produk handmade dengan standar kualitas tinggi sejak proses pembuatan.</p>
                            </div>
                        </article>
                    </div>
                </article>
            </div>

            <div class="col-12 col-lg-7">
                <div class="trust-gallery-grid">
                    <article class="trust-photo-card">
                        <img src="{{ asset('img/category/pkg.png') }}" alt="Proses Packing" loading="lazy">
                        <div class="trust-photo-label">Proses Packing</div>
                    </article>
                    <article class="trust-photo-card">
                        <img src="{{ asset('img/category/kir.jpeg') }}" alt="Tumpukan Paket" loading="lazy">
                        <div class="trust-photo-label">Siap Pengiriman</div>
                    </article>
                    <article class="trust-photo-card">
                        <img src="{{ asset('img/category/kirim.jpeg') }}" alt="Produk Terkirim" loading="lazy">
                        <div class="trust-photo-label">Produk Tersampaikan</div>
                    </article>
                </div>
            </div>
        </div>

        <!-- Trust Seal Section -->
        <div class="trust-seal">
            <p>Kepercayaan Anda adalah prioritas utama kami</p>
            <div class="trust-badge">🛡️ TERPERCAYA SEJAK 1993</div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================
     CTA SECTION
============================================ -->
<section class="cta-section">

    <!-- Decorative Blur Circle -->
    <div class="cta-circle cta-circle-top"></div>
    <div class="cta-circle cta-circle-bottom"></div>

    <div class="container position-relative">

        <!-- CTA HERO -->
        <div class="cta-hero text-center">

            <h2>
                Dapatkan Songkok Premium Pilihan Anda
            </h2>

            <p>
                Miliki koleksi songkok terlengkap dengan kualitas terbaik dari
                Tebu Mas Gresik. Proses cepat, harga bersaing, dan pelayanan
                terpercaya untuk kebutuhan Anda.
            </p>

            <div class="cta-buttons">

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   class="cta-btn cta-btn-primary">

                    <span>💬</span>
                    Chat WhatsApp
                </a>

                <a href="https://shopee.co.id"
                   target="_blank"
                   class="cta-btn cta-btn-secondary">

                    <span>🛒</span>
                    Kunjungi Shopee
                </a>

            </div>

        </div>


        <!-- CONTACT GRID -->
        <div class="row g-4 cta-grid">

            <!-- CONTACT CARD -->
            <div class="col-12 col-lg-7">

                <div class="contact-card h-100">

                    <h3>
                        Hubungi Kami
                    </h3>

                    <div class="contact-item">

                        <div class="contact-icon">💬</div>

                        <div>
                            <h5>WhatsApp</h5>

                            <a href="https://wa.me/6281234567890"
                               target="_blank">
                                +62 812 3456 7890
                            </a>

                            <p>
                                Respon cepat, terpercaya & profesional
                            </p>
                        </div>

                    </div>

                    <div class="contact-item">

                        <div class="contact-icon">🛒</div>

                        <div>
                            <h5>Shopee</h5>

                            <a href="https://shopee.co.id"
                               target="_blank">
                                Kunjungi Toko Kami
                            </a>

                            <p>
                                Belanja online dengan mudah & aman
                            </p>
                        </div>

                    </div>

                    <div class="contact-item no-border">

                        <div class="contact-icon">✉️</div>

                        <div>
                            <h5>Email</h5>

                            <a href="mailto:info@tebumasgresik.com">
                                info@tebumasgresik.com
                            </a>

                            <p>
                                Hubungi via email untuk pertanyaan
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- MAPS SIDE -->
            <div class="col-12 col-lg-5">

                <!-- LOCATION -->
                <div class="location-card">

                    <div class="location-header">

                        <div class="location-icon">📍</div>

                        <div>

                            <h4>Tebu Mas Gresik</h4>

                            <p>
                                Jl. Sindujoyo 2 A No. 6<br>
                                Kroman, Gresik<br>
                                Jawa Timur, Indonesia
                            </p>

                        </div>

                    </div>

                </div>


                <!-- MAP -->
                <div class="maps-card">

                    <iframe
                        src="https://www.google.com/maps?q=Jl.+Sindujoyo+2+A+No.+6+Kroman+Gresik&output=embed"
                        title="Lokasi Tebu Mas Gresik"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- <section> close ============================-->

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var popupVideo = document.getElementById('popupVideo');
        if (!popupVideo) {
            return;
        }
        popupVideo.addEventListener('shown.bs.modal', function () {
            var iframe = document.getElementById('popupVideoIframe');
            if (iframe && !iframe.src) {
                iframe.src = iframe.dataset.src;
            }
        });
    });
</script>
@endpush

@endsection

