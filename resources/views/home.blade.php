@extends('layouts.app')

@section('title', 'Tebu Mas Gresik')

@section('content')

<!-- ============================================-->
<!-- <section> Hero Section ============================-->
<section style="padding-top: 0; padding-bottom: 1.5rem;">
    <div class="bg-holder" style="background-image:url({{ asset('img/hero/hero-bg.svg') }})">
    </div>

    <div class="container">
        <div class="row align-items-start justify-content-between gx-0 gy-4">
            <div class="col-12 col-md-5 col-lg-6 order-0 order-md-1 text-center text-md-end px-0 px-md-3">
                <img class="hero-img" src="{{ asset('img/hero/prod.gif') }}" alt="hero-header" style="width: 100%; max-width: 420px; height: auto; margin: 0 auto;" />
            </div>
            <div class="col-12 col-md-7 col-lg-6 text-md-start text-center py-4 pe-md-5">
                <h4 class="fw-bold text-danger mb-3">{{ $heroTitle ?? 'Produsen Songkok Berkualitas dari Gresik' }}</h4>
                <h3 class="hero-title">{{ $heroSubtitle ?? 'Songkok Premium, Untuk Ibadah & Acara Resmi' }}</h3>
                <p class="mb-4 fw-medium">{{ $heroDescription ?? 'Tebu Mas menyediakan songkok AC, non AC, dan full AC.' }}
                {{ $heroDescriptionCont ?? 'Dengan bahan pilihan dan jahitan rapi' }}
                {{ $heroDescriptionEnd ?? 'Cocok untuk penggunaan harian maupun acara resmi.' }}</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start gap-3">
                    <a class="btn btn-primary btn-lg border-0 primary-btn-shadow" href="{{ route('products') }}" role="button">Lihat Product</a>
                    <a class="btn btn-outline-primary btn-lg" href="#tentang-kami" role="button">Tentang Kami</a>
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

                    <div class="service-badge">POLOS</div>

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

                    <div class="service-badge">SEDANG</div>

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

                    <div class="service-badge">PREMIUM</div>

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

        <div class="about-image-card">

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

        <div class="about-image-card">

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
        <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4">
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
<section id="kepercayaan" style="background: linear-gradient(135deg, #fafafa 0%, #f5f5f5 100%); padding: 60px 0;">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center" style="margin-bottom: 40px;">
            <h5 class="text-primary fw-semibold mb-2" style="letter-spacing: 2px; font-size: 0.95rem;">KEPERCAYAAN PELANGGAN</h5>
            <h2 class="fw-bold mb-3" style="font-size: 2rem; color: #1a1a1a;">Dipercaya Pelanggan dari Berbagai Daerah</h2>
            <p style="font-size: 1rem; color: #666; max-width: 700px; margin: 15px auto; line-height: 1.6;">Kepercayaan pelanggan adalah aset paling berharga kami. Sejak 1993, kami terus berinovasi dengan produksi lokal dan pengiriman ke seluruh nusantara.</p>
            <div style="width: 80px; height: 3px; background: linear-gradient(to right, #D97060, #C65650); margin: 15px auto;"></div>
        </div>

        <!-- Trust Stats Grid -->
        <div class="row g-3" style="margin-bottom: 45px;">
            <!-- Stat 1 -->
            <div class="col-lg-3 col-sm-6">
                <div style="background: white; padding: 24px 20px; border-radius: 14px; text-align: center; box-shadow: 0 6px 20px rgba(217,112,96,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(217,112,96,0.08)'">
                    <div style="font-size: 2.2rem; font-weight: 900; color: #D97060; margin-bottom: 6px;">30+</div>
                    <div style="font-size: 0.9rem; font-weight: 700; color: #333; margin-bottom: 6px;">TAHUN BERPENGALAMAN</div>
                    <p style="font-size: 0.8rem; color: #666; margin: 0; line-height: 1.4;">Handmade sejak 1993</p>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="col-lg-3 col-sm-6">
                <div style="background: white; padding: 24px 20px; border-radius: 14px; text-align: center; box-shadow: 0 6px 20px rgba(217,112,96,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(217,112,96,0.08)'">
                    <div style="font-size: 2.2rem; font-weight: 900; color: #D97060; margin-bottom: 6px;">10000+</div>
                    <div style="font-size: 0.9rem; font-weight: 700; color: #333; margin-bottom: 6px;">PRODUK TERKIRIM</div>
                    <p style="font-size: 0.8rem; color: #666; margin: 0; line-height: 1.4;">Digunakan ribuan pelanggan</p>
                </div>
            </div>

            <!-- Stat 3 -->
            <div class="col-lg-3 col-sm-6">
                <div style="background: white; padding: 24px 20px; border-radius: 14px; text-align: center; box-shadow: 0 6px 20px rgba(217,112,96,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(217,112,96,0.08)'">
                    <div style="font-size: 2.2rem; font-weight: 900; color: #D97060; margin-bottom: 6px;">30+</div>
                    <div style="font-size: 0.9rem; font-weight: 700; color: #333; margin-bottom: 6px;">KOTA PENGIRIMAN</div>
                    <p style="font-size: 0.8rem; color: #666; margin: 0; line-height: 1.4;">Pengiriman ke berbagai daerah</p>
                </div>
            </div>

            <!-- Stat 4 -->
            <div class="col-lg-3 col-sm-6">
                <div style="background: white; padding: 24px 20px; border-radius: 14px; text-align: center; box-shadow: 0 6px 20px rgba(217,112,96,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 20px rgba(217,112,96,0.08)'">
                    <div style="font-size: 2.2rem; font-weight: 900; color: #D97060; margin-bottom: 6px;">100%</div>
                    <div style="font-size: 0.9rem; font-weight: 700; color: #333; margin-bottom: 6px;">LOKAL GRESIK</div>
                    <p style="font-size: 0.8rem; color: #666; margin: 0; line-height: 1.4;">Produksi lokal berkualitas</p>
                </div>
            </div>
        </div>

        <!-- Trust Features + Images Section -->
        <div class="row align-items-center g-4 trust-layout" style="margin-bottom: 40px;">
            <!-- Left: Features -->
            <div class="col-12">
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <h4 style="font-size: 1.2rem; font-weight: 800; color: #1a1a1a; margin-bottom: 4px;">Komitmen Kami</h4>
                    
                    <!-- Feature 1 -->
                    <div style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 1rem; flex-shrink: 0;">✓</div>
                        <div style="flex-grow: 1;">
                            <div style="font-weight: 700; color: #1a1a1a; margin-bottom: 2px; font-size: 0.95rem;">Pengiriman Rutin</div>
                            <p style="font-size: 0.85rem; color: #666; margin: 0; line-height: 1.4;">Pengiriman rutin ke berbagai daerah dengan jaminan keamanan paket</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 1rem; flex-shrink: 0;">✓</div>
                        <div style="flex-grow: 1;">
                            <div style="font-weight: 700; color: #1a1a1a; margin-bottom: 2px; font-size: 0.95rem;">Proses Packing Profesional</div>
                            <p style="font-size: 0.85rem; color: #666; margin: 0; line-height: 1.4;">Setiap paket dikemas dengan hati-hati untuk memastikan produk sampai dengan aman</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div style="display: flex; gap: 12px; align-items: flex-start;">
                        <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 900; font-size: 1rem; flex-shrink: 0;">✓</div>
                        <div style="flex-grow: 1;">
                            <div style="font-weight: 700; color: #1a1a1a; margin-bottom: 2px; font-size: 0.95rem;">Kualitas Terjamin</div>
                            <p style="font-size: 0.85rem; color: #666; margin: 0; line-height: 1.4;">Produk handmade dengan standar kualitas tinggi sejak proses pembuatan</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Images (3 Columns) -->
            <div class="col-12">
                <div class="row g-3 trust-images-row">
                    <!-- Image 1 - Packing -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="trust-image-card" style="position: relative; display: flex; align-items: center; justify-content: center; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 35px rgba(217,112,96,0.1); transition: all 0.4s ease; aspect-ratio: 1 / 1;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 16px 45px rgba(217,112,96,0.18)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.1)'">
                            <img src="{{ asset('img/category/pkg.png') }}" alt="Proses Packing" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); padding: 16px; color: white; text-align: center;">
                                <p style="font-weight: 700; margin: 0; font-size: 0.9rem;">Proses Packing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image 2 - Tumpukan Paket -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="trust-image-card" style="position: relative; display: flex; align-items: center; justify-content: center; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 35px rgba(217,112,96,0.1); transition: all 0.4s ease; aspect-ratio: 1 / 1;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 16px 45px rgba(217,112,96,0.18)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.1)'">
                            <img src="{{ asset('img/category/kir.jpeg') }}" alt="Tumpukan Paket" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); padding: 16px; color: white; text-align: center;">
                                <p style="font-weight: 700; margin: 0; font-size: 0.9rem;">Siap Pengiriman</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image 3 - Kiriman -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="trust-image-card" style="position: relative; display: flex; align-items: center; justify-content: center; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 35px rgba(217,112,96,0.1); transition: all 0.4s ease; aspect-ratio: 1 / 1;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 16px 45px rgba(217,112,96,0.18)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.1)'">
                            <img src="{{ asset('img/category/kirim.jpeg') }}" alt="Produk Terkirim" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); padding: 16px; color: white; text-align: center;">
                                <p style="font-weight: 700; margin: 0; font-size: 0.9rem;">Produk Tersampaikan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Seal Section -->
        <div style="margin-top: 40px; text-align: center;">
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 12px;">Kepercayaan Anda adalah prioritas utama kami</p>
            <div style="display: inline-block; background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 14px 28px; border-radius: 50px; font-weight: 700; letter-spacing: 0.5px; font-size: 0.9rem;">
                🛡️ TERPERCAYA SEJAK 1993
            </div>
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
            <div class="col-12 col-lg-8">

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
            <div class="col-12 col-lg-8">

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
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6548765432097!2d112.6463!3d-7.17891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7799c3d3d3d3d!2sTebu%20Mas!5e0!3m2!1sid!2sid!4v1640000000000"
                        allowfullscreen=""
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

