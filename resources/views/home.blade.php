@extends('layouts.app')

@section('title', 'Tebu Mas Gresik')

@section('content')

<!-- ============================================-->
<!-- <section> Hero Section ============================-->
<section style="padding-top: 7rem;">
    <div class="bg-holder" style="background-image:url({{ asset('img/hero/hero-bg.svg') }})">
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                <img class="pt-7 pt-md-0 hero-img" src="{{ asset('img/hero/hero-img.png') }}" alt="hero-header" style="max-width: 60%; width: auto; height: auto;" />
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                <h4 class="fw-bold text-danger mb-3">{{ $heroTitle ?? 'Produsen Songkok Berkualitas dari Gresik' }}</h4>
                <h3 class="hero-title">{{ $heroSubtitle ?? 'Songkok Premium, Untuk Ibadah & Acara Resmi' }}</h3>
                <p class="mb-4 fw-medium">{{ $heroDescription ?? 'Tebu Mas menyediakan songkok AC, non AC, dan full AC.' }}<br class="d-none d-xl-block" />
                {{ $heroDescriptionCont ?? 'Dengan bahan pilihan dan jahitan rapi' }}<br class="d-none d-xl-block" />
                {{ $heroDescriptionEnd ?? 'Cocok untuk penggunaan harian maupun acara resmi.' }}</p>
                <div class="text-center text-md-start">
                    <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="{{ route('products') }}" role="button">Lihat Product</a>
                    <a class="btn btn-outline-primary btn-lg mb-3 mb-md-0" href="#tentang-kami" role="button">Tentang Kami</a>
                </div>

                    <!-- Modal -->
                    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <iframe class="rounded" style="width:100%;max-height:500px;" height="500px" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================-->
<!-- <section> Services Section ============================-->
<section class="pt-5 pt-md-9" id="service">
    <div class="container">
        <!-- Header Section -->
        <div class="mb-7 text-center">
            <h5 class="text-secondary">{{ $servicesLabel ?? 'Koleksi Songkok Tebu Mas' }}</h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">{{ $servicesTitle ?? 'Pilih jenis songkok sesuai kebutuhan Anda' }}</h3>
        </div>

        <!-- 3 Column Product Cards -->
        <div class="row g-4">
            <!-- Songkok Non AC -->
            <div class="col-lg-4 col-md-6">
                <!-- Image Container (Floating) -->
                <div style="height: 200px; display: flex; align-items: center; justify-content: center; position: relative; z-index: 5;">
                    <img src="{{ asset('img/category/prodlm.png') }}" alt="Songkok Non AC" style="width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" />
                    <div style="position: absolute; top: 12px; right: 12px; background: #D97060; color: white; padding: 6px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 800; z-index: 10;">POLOS</div>
                </div>

                <!-- Info Box (White Container) -->
                <div style="background: white; border-radius: 16px; box-shadow: 0 8px 24px rgba(217,112,96,0.08); transition: all 0.4s ease; padding: 24px; margin-top: 15px; position: relative; z-index: 1;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.08)'">
                    <h4 style="font-size: 1.25rem; font-weight: 800; color: #1a1a1a; margin: 0 0 12px 0;">Songkok Non AC</h4>
                    <p style="font-size: 0.9rem; color: #666; line-height: 1.6; margin: 0 0 16px 0;">
                        <strong>Solid & Polos</strong><br>
                        Tanpa ventilasi, full hitam dengan desain sederhana dan elegan. Cocok untuk tampilan formal, acara resmi, dan penggunaan sehari-hari yang mencari kemudahan.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 12px;">
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Padat</span>
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Formal</span>
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Tahan Lama</span>
                    </div>
                    <a href="{{ route('products') }}" style="background: #D97060; color: white; padding: 11px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: block; width: 100%;" onmouseover="this.style.background='#C65650'" onmouseout="this.style.background='#D97060'">Lihat Produk</a>
                </div>
            </div>

            <!-- Songkok AC -->
            <div class="col-lg-4 col-md-6">
                <!-- Image Container (Floating) -->
                <div style="height: 200px; display: flex; align-items: center; justify-content: center; position: relative; z-index: 5;">
                    <img src="{{ asset('img/category/ac.png') }}" alt="Songkok AC" style="width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" />
                    <div style="position: absolute; top: 12px; right: 12px; background: #D97060; color: white; padding: 6px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 800; z-index: 10;">SEDANG</div>
                </div>

                <!-- Info Box (White Container) -->
                <div style="background: white; border-radius: 16px; box-shadow: 0 8px 24px rgba(217,112,96,0.08); transition: all 0.4s ease; padding: 24px; margin-top: 15px; position: relative; z-index: 1;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.08)'">
                    <h4 style="font-size: 1.25rem; font-weight: 800; color: #1a1a1a; margin: 0 0 12px 0;">Songkok AC</h4>
                    <p style="font-size: 0.9rem; color: #666; line-height: 1.6; margin: 0 0 16px 0;">
                        <strong>Ventilasi Standar</strong><br>
                        Terdapat lubang jaring di 2 ujung (atas & bawah) untuk sirkulasi udara. Nyaman untuk aktivitas harian, ibadah, dan iklim tropis yang lebih adem.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 12px;">
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Berventilasi</span>
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Nyaman</span>
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Populer</span>
                    </div>
                    <a href="{{ route('products') }}" style="background: #D97060; color: white; padding: 11px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: block; width: 100%;" onmouseover="this.style.background='#C65650'" onmouseout="this.style.background='#D97060'">Lihat Produk</a>
                </div>
            </div>

            <!-- Songkok Full AC -->
            <div class="col-lg-4 col-md-6">
                <!-- Image Container (Floating) -->
                <div style="height: 200px; display: flex; align-items: center; justify-content: center; position: relative; z-index: 5;">
                    <img src="{{ asset('img/category/fullac.png') }}" alt="Songkok Full AC" style="width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" />
                    <div style="position: absolute; top: 12px; right: 12px; background: #D97060; color: white; padding: 6px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 800; z-index: 10;">PREMIUM</div>
                </div>

                <!-- Info Box (White Container) -->
                <div style="background: white; border-radius: 16px; box-shadow: 0 8px 24px rgba(217,112,96,0.08); transition: all 0.4s ease; padding: 24px; margin-top: 15px; position: relative; z-index: 1;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.08)'">
                    <h4 style="font-size: 1.25rem; font-weight: 800; color: #1a1a1a; margin: 0 0 12px 0;">Songkok Full AC</h4>
                    <p style="font-size: 0.9rem; color: #666; line-height: 1.6; margin: 0 0 16px 0;">
                        <strong>Ventilasi Maksimal</strong><br>
                        Seluruh permukaan kepala adalah jaring untuk sirkulasi udara penuh. Paling nyaman dan adem, ideal untuk aktivitas outdoor dan iklim panas.
                    </p>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 12px;">
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Full Jaring</span>
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Adem</span>
                        <span style="background: #F5F5F5; color: #D97060; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Premium</span>
                    </div>
                    <a href="{{ route('products') }}" style="background: #D97060; color: white; padding: 11px; border-radius: 10px; text-align: center; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: block; width: 100%;" onmouseover="this.style.background='#C65650'" onmouseout="this.style.background='#D97060'">Lihat Produk</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- ============================================-->
<!-- <section> Tentang Kami Section ============================-->
<section class="py-5" id="tentang-kami" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h5 class="text-primary fw-semibold mb-2" style="letter-spacing: 2px;">TENTANG KAMI</h5>
            <h2 class="fw-bold mb-3" style="font-size: 2.2rem; color: #1a1a1a;">Mengenal Lebih Dekat Tebu Mas Gresik</h2>
            <div style="width: 80px; height: 3px; background: linear-gradient(to right, #D97060, #C65650); margin: 20px auto;"></div>
        </div>

        <!-- Content Row - 3 Columns Professional Design -->
        <div class="row align-items-stretch g-4">
            <!-- Column 1: Left Image with Decorative Elements -->
            <div class="col-lg-4">
                <div style="position: relative; height: 100%; display: flex; align-items: center;">
                    <!-- Decorative Background -->
                    <div style="position: absolute; top: -40px; left: -40px; width: 130%; height: 130%; background: linear-gradient(135deg, rgba(217,112,96,0.1) 0%, rgba(217,112,96,0.02) 100%); border-radius: 30px; z-index: -1;"></div>
                    
                    <!-- Main Image -->
                    <div style="position: relative; border-radius: 24px; overflow: hidden; box-shadow: 0 25px 70px rgba(217,112,96,0.2); transition: all 0.4s ease; width: 100%;">
                        <img src="{{ asset('img/category/Songkok.png') }}" alt="Tebu Mas Gresik" style="width: 100%; height: auto; display: block; filter: contrast(1.15) brightness(1.08);">
                        <div style="position: absolute; top: 24px; right: 24px; background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 10px 18px; border-radius: 50px; font-size: 0.8rem; font-weight: 700; letter-spacing: 1px; box-shadow: 0 8px 20px rgba(217,112,96,0.3);">EST. 1993</div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div style="position: absolute; bottom: 30px; left: 30px; background: white; padding: 14px 22px; border-radius: 14px; box-shadow: 0 12px 35px rgba(0,0,0,0.12); display: flex; align-items: center; gap: 12px;">
                        <div style="width: 44px; height: 44px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 22px;">⭐</div>
                        <div style="font-weight: 700; color: #333; font-size: 0.95rem;">Terpercaya</div>
                    </div>
                </div>
            </div>

            <!-- Column 2: Center Text with Professional Design -->
            <div class="col-lg-4">
                <div style="padding: 30px 25px; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                    <!-- Main Title -->
                    <h3 style="font-size: 2rem; font-weight: 900; color: #1a1a1a; line-height: 1.25; margin-bottom: 24px; word-break: break-word;">Kualitas Premium Sejak 1993</h3>

                    <!-- Divider -->
                    <div style="width: 50px; height: 4px; background: linear-gradient(to right, #D97060, rgba(217,112,96,0.3)); border-radius: 2px; margin-bottom: 24px;"></div>

                    <!-- Description -->
                    <p style="font-size: 1rem; color: #444; line-height: 1.85; font-weight: 400; margin-bottom: 20px;">
                        Sejak 1993, Tebu Mas Gresik telah menghadirkan songkok berkualitas sebagai wujud komitmen terhadap kenyamanan dan kepercayaan pelanggan. Setiap produk dibuat melalui proses yang teliti dengan bahan pilihan, menghasilkan jahitan yang rapi, kuat, dan nyaman.
                    </p>

                    <!-- Second Paragraph -->
                    <p style="font-size: 1rem; color: #555; line-height: 1.85; font-weight: 400; margin-bottom: 28px;">
                        Dengan pengalaman yang terus terjaga, Tebu Mas mengedepankan desain elegan serta kualitas konsisten. Setiap songkok mencerminkan nilai kerapian, kepercayaan diri, dan karakter pemakainya.
                    </p>

                    <!-- CTA Button -->
                    <div>
                        <a href="{{ route('products') }}" class="btn btn-primary" style="background: linear-gradient(135deg, #D97060, #C65650); border: none; color: #fff; font-weight: 800; padding: 14px 36px; border-radius: 50px; font-size: 0.98rem; box-shadow: 0 10px 25px rgba(217,112,96,0.28); transition: all 0.3s ease; cursor: pointer; letter-spacing: 0.5px; text-decoration: none; display: inline-block;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 35px rgba(217,112,96,0.38)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 25px rgba(217,112,96,0.28)'">
                            Jelajahi Koleksi Kami →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Column 3: Right Image with Professional Content -->
            <div class="col-lg-4">
                <div style="display: flex; flex-direction: column; gap: 20px; height: 100%; justify-content: flex-start;">
                    <!-- Main Image - No Background -->
                    <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(217,112,96,0.15); transition: all 0.4s ease;">
                        <img src="{{ asset('img/category/labelpg.png') }}" alt="Tebu Mas Label" style="width: 100%; height: auto; display: block; border-radius: 20px;">
                    </div>

                    <!-- Info Section -->
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        <!-- Achievement Stats -->
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                            <!-- Stat 1 -->
                            <div style="background: linear-gradient(135deg, #D97060 0%, #C65650 100%); padding: 20px 14px; border-radius: 12px; color: white; text-align: center; box-shadow: 0 8px 20px rgba(217,112,96,0.2); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 30px rgba(217,112,96,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.2)'">
                                <div style="font-size: 1.8rem; font-weight: 900; margin-bottom: 4px;">30+</div>
                                <div style="font-size: 0.75rem; font-weight: 700; letter-spacing: 0.5px;">TAHUN</div>
                            </div>
                            
                            <!-- Stat 2 -->
                            <div style="background: white; padding: 20px 14px; border-radius: 12px; border: 2.5px solid #D97060; color: #D97060; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.background='#D97060'; this.style.color='white'; this.style.boxShadow='0 12px 30px rgba(217,112,96,0.25)'" onmouseout="this.style.transform='translateY(0)'; this.style.background='white'; this.style.color='#D97060'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.1)'">
                                <div style="font-size: 1.8rem; font-weight: 900; margin-bottom: 4px;">100%</div>
                                <div style="font-size: 0.75rem; font-weight: 700; letter-spacing: 0.5px;">HANDMADE</div>
                            </div>
                        </div>

                        <!-- Highlight Cards -->
                        <div style="display: flex; flex-direction: column; gap: 10px;">
                            <!-- Card 1 -->
                            <div style="background: linear-gradient(135deg, rgba(217,112,96,0.08) 0%, rgba(217,112,96,0.02) 100%); border-left: 4px solid #D97060; padding: 14px 16px; border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.background='linear-gradient(135deg, rgba(217,112,96,0.12) 0%, rgba(217,112,96,0.05) 100%)'; this.style.transform='translateX(4px)'" onmouseout="this.style.background='linear-gradient(135deg, rgba(217,112,96,0.08) 0%, rgba(217,112,96,0.02) 100%)'; this.style.transform='translateX(0)'">
                                <div style="font-size: 0.85rem; font-weight: 700; color: #D97060; margin-bottom: 4px;">✓ Bahan Premium</div>
                                <div style="font-size: 0.8rem; color: #666; line-height: 1.4;">Pilihan terbaik untuk kenyamanan maksimal</div>
                            </div>
                            
                            <!-- Card 2 -->
                            <div style="background: linear-gradient(135deg, rgba(217,112,96,0.08) 0%, rgba(217,112,96,0.02) 100%); border-left: 4px solid #D97060; padding: 14px 16px; border-radius: 8px; transition: all 0.3s ease;" onmouseover="this.style.background='linear-gradient(135deg, rgba(217,112,96,0.12) 0%, rgba(217,112,96,0.05) 100%)'; this.style.transform='translateX(4px)'" onmouseout="this.style.background='linear-gradient(135deg, rgba(217,112,96,0.08) 0%, rgba(217,112,96,0.02) 100%)'; this.style.transform='translateX(0)'">
                                <div style="font-size: 0.85rem; font-weight: 700; color: #D97060; margin-bottom: 4px;">✓ Garansi Kualitas</div>
                                <div style="font-size: 0.8rem; color: #666; line-height: 1.4;">Setiap produk diperiksa dengan teliti</div>
                            </div>
                        </div>
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

        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Jht.png') }}" width="75" alt="Service" />
                  <h4 class="mb-3">Jahitan Rapi & Handmade</h4>
                  <p class="mb-0 fw-medium">Setiap songkok dibuat secara handmade dengan jahitan rapi dan teliti sehingga lebih awet dan nyaman digunakan.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Nyaman.png') }}" width="75" alt="Service" />
                  <h4 class="mb-3">Nyaman Digunakan Seharian</h4>
                  <p class="mb-0 fw-medium">Ringan, pas di kepala, dan tetap nyaman untuk ibadah maupun aktivitas sehari-hari.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Elegan.png') }}" width="75" alt="Service" />
                  <h4 class="mb-3">Desain Sederhana dan Elegan</h4>
                  <p class="mb-0 fw-medium">Tampilan yang tidak berlebihan dan tetap cocok digunakan di berbagai acara.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="{{ asset('img/dest/Pres.png') }}" width="75" alt="Service" />
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
        <div class="row align-items-center g-4" style="margin-bottom: 40px;">
            <!-- Left: Features -->
            <div class="col-lg-4">
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
            <div class="col-lg-8">
                <div class="row g-3">
                    <!-- Image 1 - Packing -->
                    <div class="col-lg-4 col-sm-6">
                        <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 35px rgba(217,112,96,0.1); transition: all 0.4s ease; height: 240px;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 16px 45px rgba(217,112,96,0.18)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.1)'">
                            <img src="{{ asset('img/category/pkg.png') }}" alt="Proses Packing" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); padding: 16px; color: white;">
                                <p style="font-weight: 700; margin: 0; font-size: 0.9rem;">Proses Packing</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image 2 - Tumpukan Paket -->
                    <div class="col-lg-4 col-sm-6">
                        <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 35px rgba(217,112,96,0.1); transition: all 0.4s ease; height: 240px;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 16px 45px rgba(217,112,96,0.18)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.1)'">
                            <img src="{{ asset('img/category/kir.jpeg') }}" alt="Tumpukan Paket" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); padding: 16px; color: white;">
                                <p style="font-weight: 700; margin: 0; font-size: 0.9rem;">Siap Pengiriman</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image 3 - Kiriman -->
                    <div class="col-lg-4 col-sm-6">
                        <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 12px 35px rgba(217,112,96,0.1); transition: all 0.4s ease; height: 240px;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 16px 45px rgba(217,112,96,0.18)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 12px 35px rgba(217,112,96,0.1)'">
                            <img src="{{ asset('img/category/kirim.jpeg') }}" alt="Produk Terkirim" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent); padding: 16px; color: white;">
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

<!-- ============================================-->
<!-- ============================================-->
<!-- <section> CTA dan Kontak ============================-->
<section style="padding: 80px 0; background: linear-gradient(135deg, #D97060 0%, #C65650 100%); position: relative; overflow: hidden;">
    <!-- Background Decoration with Animation -->
    <style>
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(20px); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 30px rgba(255,255,255,0.2); }
            50% { box-shadow: 0 0 60px rgba(255,255,255,0.4); }
        }
        @keyframes slide-in-left {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes slide-in-right {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        .cta-btn-primary {
            background: white;
            color: #D97060;
            padding: 16px 40px;
            border-radius: 12px;
            font-weight: 800;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            box-shadow: 0 12px 30px rgba(0,0,0,0.2);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            animation: slide-in-left 0.6s ease-out;
        }
        .cta-btn-primary:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            background: #f5f5f5;
        }
        .cta-btn-secondary {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 16px 40px;
            border-radius: 12px;
            font-weight: 800;
            text-decoration: none;
            border: 2px solid white;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            animation: slide-in-right 0.6s ease-out;
        }
        .cta-btn-secondary:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            border-color: #f5f5f5;
        }
    </style>
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 1; animation: float-slow 8s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 300px; height: 300px; background: rgba(255,255,255,0.08); border-radius: 50%; z-index: 1; animation: float-slow 10s ease-in-out infinite;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <!-- Main CTA Section -->
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-size: 2.8rem; font-weight: 900; color: white; line-height: 1.2; margin-bottom: 16px; animation: slide-in-left 0.6s ease-out;">Dapatkan Songkok Premium Pilihan Anda</h2>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.95); max-width: 700px; margin: 0 auto 32px; line-height: 1.7; animation: slide-in-right 0.6s ease-out 0.1s both;">Miliki koleksi songkok terlengkap dengan kualitas terbaik dari Tebu Mas Gresik. Proses cepat, harga bersaing, dan pelayanan terpercaya untuk kebutuhan Anda.</p>
            
            <!-- CTA Buttons with Enhanced Interactivity -->
            <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
                <a href="https://wa.me/6281234567890" target="_blank" class="cta-btn-primary">
                    <span style="font-size: 1.3rem;">💬</span>
                    <span>Chat WhatsApp</span>
                </a>
                <a href="https://shopee.co.id" target="_blank" class="cta-btn-secondary">
                    <span style="font-size: 1.3rem;">🛒</span>
                    <span>Kunjungi Shopee</span>
                </a>
            </div>
        </div>
        
        <!-- Contact & Lokasi Section with Interactive Elements -->
        <div class="row g-4" style="margin-top: 60px;">
            <!-- Contact Information -->
            <div class="col-lg-4">
                <div style="background: rgba(255,255,255,0.95); padding: 40px 30px; border-radius: 16px; box-shadow: 0 20px 60px rgba(0,0,0,0.15); height: 100%; display: flex; flex-direction: column; transition: all 0.4s ease; animation: slide-in-left 0.6s ease-out 0.2s both;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 30px 80px rgba(0,0,0,0.25)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'">
                    <h3 style="font-size: 1.3rem; font-weight: 800; color: #1a1a1a; margin-bottom: 28px; text-align: center;">Hubungi Kami</h3>
                    
                    <!-- WhatsApp -->
                    <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 2px solid #F0F0F0; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.borderBottomColor='#D97060'; this.style.transform='translateX(4px)'" onmouseout="this.style.borderBottomColor='#F0F0F0'; this.style.transform='translateX(0)'">
                        <div style="font-size: 2rem; min-width: 50px; text-align: center; animation: float-slow 6s ease-in-out infinite;">💬</div>
                        <div>
                            <div style="font-weight: 700; color: #333; margin-bottom: 6px; font-size: 0.95rem;">WhatsApp</div>
                            <a href="https://wa.me/6281234567890" target="_blank" style="color: #D97060; text-decoration: none; font-weight: 600; transition: all 0.3s ease; display: inline-block; position: relative;" onmouseover="this.style.color='#C65650'" onmouseout="this.style.color='#D97060'">+62 812 3456 7890</a>
                            <p style="color: #999; font-size: 0.8rem; margin-top: 4px; line-height: 1.5;">Respon cepat, terpercaya & profesional</p>
                        </div>
                    </div>
                    
                    <!-- Shopee -->
                    <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 2px solid #F0F0F0; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.borderBottomColor='#D97060'; this.style.transform='translateX(4px)'" onmouseout="this.style.borderBottomColor='#F0F0F0'; this.style.transform='translateX(0)'">
                        <div style="font-size: 2rem; min-width: 50px; text-align: center; animation: float-slow 7s ease-in-out infinite;">🛒</div>
                        <div>
                            <div style="font-weight: 700; color: #333; margin-bottom: 6px; font-size: 0.95rem;">Shopee</div>
                            <a href="https://shopee.co.id" target="_blank" style="color: #D97060; text-decoration: none; font-weight: 600; transition: all 0.3s ease; display: inline-block;" onmouseover="this.style.color='#C65650'" onmouseout="this.style.color='#D97060'">Kunjungi Toko Kami</a>
                            <p style="color: #999; font-size: 0.8rem; margin-top: 4px; line-height: 1.5;">Belanja online dengan mudah & aman</p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div style="display: flex; align-items: flex-start; gap: 16px; transition: all 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateX(4px)'" onmouseout="this.style.transform='translateX(0)'">
                        <div style="font-size: 2rem; min-width: 50px; text-align: center; animation: float-slow 8s ease-in-out infinite;">✉️</div>
                        <div>
                            <div style="font-weight: 700; color: #333; margin-bottom: 6px; font-size: 0.95rem;">Email</div>
                            <a href="mailto:info@tebumasgresik.com" style="color: #D97060; text-decoration: none; font-weight: 600; transition: all 0.3s ease; display: inline-block; word-break: break-all;" onmouseover="this.style.color='#C65650'" onmouseout="this.style.color='#D97060'">info@tebumasgresik.com</a>
                            <p style="color: #999; font-size: 0.8rem; margin-top: 4px; line-height: 1.5;">Hubungi via email untuk pertanyaan</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Maps & Alamat -->
            <div class="col-lg-8" style="animation: slide-in-right 0.6s ease-out 0.3s both;">
                <!-- Alamat Card with Interactive Hover -->
                <div style="background: rgba(255,255,255,0.95); padding: 30px; border-radius: 16px; margin-bottom: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.1); transition: all 0.4s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 16px 40px rgba(0,0,0,0.2)'; this.style.borderLeft='5px solid #D97060'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.1)'; this.style.borderLeft='5px solid transparent'">
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="font-size: 2.5rem; min-width: 60px; text-align: center; animation: float-slow 6s ease-in-out infinite;">📍</div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin: 0 0 8px 0;">Lokasi Perusahaan</h4>
                            <p style="color: #555; font-weight: 600; font-size: 1rem; margin: 0 0 12px 0;">Tebu Mas Gresik</p>
                            <p style="color: #666; line-height: 1.7; font-size: 0.95rem; margin: 0;">
                                Jl. Sindujoyo 2 A No. 6<br>
                                Kroman, Gresik<br>
                                Jawa Timur, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Google Maps Embed with Interactive Border -->
                <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.1); transition: all 0.4s ease; border: 3px solid transparent;" onmouseover="this.style.boxShadow='0 16px 40px rgba(0,0,0,0.2)'; this.style.borderColor='rgba(217,112,96,0.3)'" onmouseout="this.style.boxShadow='0 8px 24px rgba(0,0,0,0.1)'; this.style.borderColor='transparent'">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6548765432097!2d112.6463!3d-7.17891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7799c3d3d3d3d3%3A0x7d5b8c3c5c3d3d3d!2sJl.%20Sindujoyo%202%20A%20No.%206%2C%20Kroman%2C%20Kec.%20Gresik%2C%20Kabupaten%20Gresik%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1640000000000" width="100%" height="350" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade;"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

@endsection
