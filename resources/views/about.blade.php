@extends('layouts.app')

@section('title', 'Tentang Kami - Tebu Mas Gresik')
@section('description', 'Mengenal Tebu Mas Gresik - Produsen Songkok Berkualitas Tinggi dengan Pengalaman 30+ Tahun')

@section('content')

<!-- ============================================-->
<!-- ABOUT HERO SECTION -->
<!-- ============================================-->

<style>

/* ============================================
   ABOUT HERO
============================================ */

.about-hero-section {
  position: relative;
  overflow: hidden;

  padding: 8rem 0 6rem;
  margin-top: 65px;

  background:
    linear-gradient(
      180deg,
      #faf8f7 0%,
      #ffffff 100%
    );
}

/* ============================================
   BACKGROUND
============================================ */

.about-hero-blur {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  z-index: 1;
}

.about-hero-blur-1 {
  top: -180px;
  right: -120px;

  width: 380px;
  height: 380px;

  background: rgba(217,112,96,0.12);
}

.about-hero-blur-2 {
  bottom: -160px;
  left: -120px;

  width: 300px;
  height: 300px;

  background: rgba(198,86,80,0.08);
}

.about-hero-section .container {
  position: relative;
  z-index: 2;
}

/* ============================================
   CONTENT
============================================ */

.about-hero-content {
  padding-right: 2rem;
}

.about-hero-label {
  display: inline-flex;
  align-items: center;

  padding: 0.75rem 1.3rem;
  margin-bottom: 1.6rem;

  border-radius: 999px;

  background: rgba(217,112,96,0.10);

  color: #D97060;

  font-size: 0.78rem;
  font-weight: 800;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.about-hero-content h1 {
  color: #14183E;

  font-size: 4.2rem;
  font-weight: 900;
  line-height: 1.05;

  margin-bottom: 1.5rem;
}

.about-hero-content p {
  max-width: 580px;

  color: #667085;

  font-size: 1rem;
  line-height: 1.9;

  margin-bottom: 2.3rem;
}

/* ============================================
   STATS
============================================ */

.about-hero-stats {
  display: flex;
  gap: 1rem;

  margin-bottom: 2.3rem;
}

.about-hero-stat {
  min-width: 170px;

  padding: 1.4rem 1.5rem;

  border-radius: 22px;

  background: rgba(255,255,255,0.95);

  border: 1px solid rgba(0,0,0,0.05);

  box-shadow:
    0 15px 35px rgba(0,0,0,0.05);
}

.about-hero-stat h3 {
  color: #D97060;

  font-size: 2rem;
  font-weight: 900;

  margin-bottom: 0.35rem;
}

.about-hero-stat span {
  color: #667085;

  font-size: 0.9rem;
  font-weight: 600;
}

/* ============================================
   BUTTON
============================================ */

.about-hero-actions {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
}

.about-btn-primary,
.about-btn-secondary {
  display: inline-flex;
  align-items: center;
  justify-content: center;

  padding: 1rem 2rem;

  border-radius: 16px;

  text-decoration: none;

  font-size: 0.95rem;
  font-weight: 700;

  transition: all 0.3s ease;
}

.about-btn-primary {
  background: #D97060;
  color: #fff;

  box-shadow:
    0 15px 30px rgba(217,112,96,0.25);
}

.about-btn-primary:hover {
  transform: translateY(-4px);

  background: #C65650;
  color: #fff;
}

.about-btn-secondary {
  background: #fff;
  color: #14183E;

  border: 1px solid rgba(20,24,62,0.08);
}

.about-btn-secondary:hover {
  transform: translateY(-4px);

  background: #14183E;
  color: #fff;
}

/* ============================================
   IMAGE SIDE
============================================ */

.about-hero-gallery {
  display: flex;
  flex-direction: column;
  gap: 1.2rem;
}

/* MAIN IMAGE */

.about-main-image {
  position: relative;

  border-radius: 32px;
  overflow: hidden;

  background: #fff;

  padding: 1rem;

  box-shadow:
    0 30px 70px rgba(0,0,0,0.08);
}

.about-main-image img {
  width: 100%;
  height: auto;

  display: block;

  border-radius: 24px;

  object-fit: contain;
}

/* SMALL GRID */

.about-small-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.2rem;
}

.about-small-card {
  background: #fff;

  border-radius: 24px;

  padding: 1rem;

  box-shadow:
    0 20px 45px rgba(0,0,0,0.06);

  transition: all 0.3s ease;
}

.about-small-card:hover {
  transform: translateY(-6px);
}

.about-small-card img {
  width: 100%;
  height: 220px;

  object-fit: contain;

  display: block;
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 1023px) {

  .about-hero-section {
    padding: 7rem 0 5rem;
  }

  .about-hero-content {
    padding-right: 0;

    text-align: center;
  }

  .about-hero-content p {
    margin-left: auto;
    margin-right: auto;
  }

  .about-hero-content h1 {
    font-size: 3.2rem;
  }

  .about-hero-stats {
    justify-content: center;
  }

  .about-hero-actions {
    justify-content: center;
  }

  .about-hero-gallery {
    margin-top: 2rem;
  }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 768px) {

  .about-hero-section {
    padding: 6rem 0 4rem;
    margin-top: 55px;
  }

  .about-hero-content h1 {
    font-size: 2.3rem;
    line-height: 1.18;
  }

  .about-hero-content p {
    font-size: 0.95rem;
    line-height: 1.8;
  }

  .about-hero-stats {
    flex-direction: column;
  }

  .about-hero-stat {
    width: 100%;
  }

  .about-hero-actions {
    flex-direction: column;
  }

  .about-btn-primary,
  .about-btn-secondary {
    width: 100%;
  }

  .about-main-image {
    border-radius: 24px;
    padding: 0.8rem;
  }

  .about-main-image img {
    border-radius: 18px;
  }

  .about-small-grid {
    grid-template-columns: 1fr;
  }

  .about-small-card {
    padding: 0.8rem;
    border-radius: 20px;
  }

  .about-small-card img {
    height: 180px;
  }

}
/* ============================================
   TABLET IMPROVEMENT
============================================ */

@media (max-width: 1023px) {

  .about-hero-section {
    padding: 7rem 0 5rem;
  }

  .about-hero-content {
    max-width: 100%;
    text-align: center;

    margin-bottom: 2rem;
  }

  .about-hero-label {
    margin-inline: auto;
  }

  .about-hero-content h1 {
    font-size: 2.8rem;
    line-height: 1.18;

    margin-bottom: 1.4rem;
  }

  .about-hero-content p {
    max-width: 720px;

    margin-inline: auto;
    margin-bottom: 2rem;

    font-size: 1rem;
  }

  .about-hero-stats {
    justify-content: center;
    gap: 1rem;

    margin-bottom: 2rem;
  }

  .about-hero-stat {
    max-width: 220px;
  }

  .about-hero-actions {
    justify-content: center;
  }

  /* IMAGE AREA */
  .about-hero-gallery {
    margin-top: 1rem;
  }

  .about-hero-main-image {
    height: auto;
    padding: 2rem;

    border-radius: 28px;
  }

  .about-hero-main-image img {
    width: 100%;
    height: auto;

    object-fit: contain;
  }

  .about-hero-small-wrapper {
    gap: 1rem;
  }

  .about-hero-small-image {
    height: auto;

    padding: 1.2rem;
  }

  .about-hero-small-image img {
    width: 100%;
    height: auto;

    object-fit: contain;
  }

}


/* ============================================
   MOBILE IMPROVEMENT
============================================ */

@media (max-width: 768px) {

  .about-hero-section {
    padding: 6rem 0 4rem;
    margin-top: 55px;
  }

  .about-hero-content {
    text-align: center;
  }

  .about-hero-content h1 {
    font-size: 2rem;
    line-height: 1.25;

    margin-bottom: 1rem;
  }

  .about-hero-content p {
    font-size: 0.95rem;
    line-height: 1.8;

    margin-bottom: 1.8rem;
  }

  /* STATS */
  .about-hero-stats {
    flex-direction: column;
    align-items: center;

    gap: 1rem;
  }

  .about-hero-stat {
    width: 100%;
    max-width: 100%;

    padding: 1.2rem;
    border-radius: 20px;
  }

  .about-hero-stat h3 {
    font-size: 1.8rem;
  }

  /* BUTTONS */
  .about-hero-actions {
    flex-direction: column;
    width: 100%;
  }

  .about-primary-btn,
  .about-secondary-btn {
    width: 100%;

    padding: 1rem 1.4rem;
    border-radius: 14px;
  }

  /* IMAGES */
  .about-hero-gallery {
    gap: 1rem;
  }

  .about-hero-main-image {
    height: auto;

    padding: 1.3rem;
    border-radius: 24px;
  }

  .about-hero-main-image img {
    width: 100%;
    height: auto;

    object-fit: contain;
  }

  .about-hero-small-wrapper {
    grid-template-columns: 1fr 1fr;
    gap: 0.8rem;
  }

  .about-hero-small-image {
    height: auto;

    padding: 1rem;
    border-radius: 18px;
  }

  .about-hero-small-image img {
    width: 100%;
    height: auto;

    object-fit: contain;
  }

}

</style>

<section class="about-hero-section">

    <!-- BLUR -->
    <div class="about-hero-blur about-hero-blur-1"></div>
    <div class="about-hero-blur about-hero-blur-2"></div>

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- LEFT -->
            <div class="col-lg-6">

                <div class="about-hero-content">

                    <span class="about-hero-label">
                        Tentang Tebu Mas
                    </span>

                    <h1>
                        Songkok Premium
                        dengan Sentuhan
                        Elegan & Profesional
                    </h1>

                    <p>
                        Tebu Mas Gresik menghadirkan songkok berkualitas
                        sejak 1993 dengan desain elegan, jahitan rapi,
                        dan kenyamanan maksimal untuk kebutuhan formal
                        maupun penggunaan harian.
                    </p>

                    <!-- STATS -->
                    <div class="about-hero-stats">

                        <div class="about-hero-stat">
                            <h3>30+</h3>
                            <span>Tahun Pengalaman</span>
                        </div>

                        <div class="about-hero-stat">
                            <h3>10K+</h3>
                            <span>Pelanggan Puas</span>
                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="about-hero-actions">

                        <a href="{{ route('products') }}"
                           class="about-btn-primary">

                            Lihat Koleksi

                        </a>

                        <a href="https://wa.me/6281234567890"
                           class="about-btn-secondary">

                            Hubungi Kami

                        </a>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-6">

                <div class="about-hero-gallery">

                    <!-- MAIN -->
                    <div class="about-main-image">

                        <img
                            src="{{ asset('img/hero/prod.gif') }}"
                            alt="Produksi Songkok"
                        >

                    </div>

                    <!-- SMALL -->
                    <div class="about-small-grid">

                        <div class="about-small-card">

                            <img
                                src="{{ asset('img/category/Songkok.png') }}"
                                alt="Songkok Premium"
                            >

                        </div>

                        <div class="about-small-card">

                            <img
                                src="{{ asset('img/category/labelpg.png') }}"
                                alt="Label Premium"
                            >

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ============================================-->
<!-- SHOWCASE SECTION -->
<!-- ============================================-->
<section class="about-showcase-section">

    <div class="container">

        <!-- HEADER -->
        <div class="about-showcase-header">

            <span class="about-showcase-label">
                Produk Unggulan
            </span>

            <h2>
                Koleksi Songkok Premium <br>
                dengan Karakter Berbeda
            </h2>

            <p>
                Setiap produk memiliki karakteristik tersendiri mulai dari
                desain klasik formal hingga ventilasi modern untuk kenyamanan
                maksimal.
            </p>

        </div>

        <!-- TOP FEATURED -->
        <div class="about-featured-product">

            <!-- IMAGE -->
            <div class="about-featured-image">
                <img src="{{ asset('img/category/ac.png') }}"
                     alt="Songkok AC Premium">
            </div>

            <!-- CONTENT -->
            <div class="about-featured-content">

                <span class="featured-badge">
                    MOST POPULAR
                </span>

                <h3>
                    Songkok AC Premium
                </h3>

                <p>
                    Dilengkapi ventilasi udara modern untuk memberikan
                    kenyamanan maksimal tanpa mengurangi kesan elegan.
                    Cocok digunakan harian maupun acara formal.
                </p>

                <!-- FEATURES -->
                <div class="featured-features">

                    <div class="featured-item">
                        <strong>Ventilasi Adem</strong>
                        <span>Sirkulasi udara lebih nyaman</span>
                    </div>

                    <div class="featured-item">
                        <strong>Desain Premium</strong>
                        <span>Tampilan lebih modern & eksklusif</span>
                    </div>

                    <div class="featured-item">
                        <strong>Nyaman Dipakai</strong>
                        <span>Ringan digunakan seharian</span>
                    </div>

                </div>

                <a href="{{ route('products') }}"
                   class="featured-btn">
                    Lihat Produk
                </a>

            </div>

        </div>

        <!-- SMALL CARDS -->
        <div class="about-showcase-grid">

            <!-- CARD -->
            <div class="showcase-card minimal">

                <div class="showcase-image">
                    <img src="{{ asset('img/category/nonac.png') }}"
                         alt="Songkok Non AC">
                </div>

                <div class="showcase-content">

                    <span class="showcase-type">
                        Classic Edition
                    </span>

                    <h4>Songkok Non AC</h4>

                    <p>
                        Model klasik dengan desain formal
                        dan tampilan lebih kokoh.
                    </p>

                </div>

            </div>

            <!-- CARD -->
            <div class="showcase-card premium">

                <div class="premium-top">
                    <span>PREMIUM</span>
                </div>

                <div class="showcase-image">
                    <img src="{{ asset('img/category/labelpg.png') }}"
                         alt="Label Premium">
                </div>

                <div class="showcase-content">

                    <h4>Label Premium</h4>

                    <p>
                        Identitas eksklusif dengan
                        detail finishing berkualitas tinggi.
                    </p>

                </div>

            </div>

            <!-- CARD -->
            <div class="showcase-card dark-card">

                <div class="showcase-image dark">
                    <img src="{{ asset('img/category/Songkok.png') }}"
                         alt="Koleksi Eksklusif">
                </div>

                <div class="showcase-content">

                    <span class="showcase-type light">
                        Exclusive Collection
                    </span>

                    <h4>Koleksi Eksklusif</h4>

                    <p>
                        Kombinasi desain modern,
                        elegan, dan nyaman digunakan.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

<style>

/* ============================================
   SHOWCASE SECTION
============================================ */

.about-showcase-section{
    padding: 7rem 0;
    background: #f8f8f8;
}

/* HEADER */
.about-showcase-header{
    text-align: center;
    max-width: 760px;
    margin: 0 auto 5rem;
}

.about-showcase-label{
    display: inline-block;

    margin-bottom: 1rem;

    color: #D97060;

    font-size: 0.82rem;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.about-showcase-header h2{
    color: #14183E;

    font-size: 3rem;
    font-weight: 900;
    line-height: 1.2;

    margin-bottom: 1.4rem;
}

.about-showcase-header p{
    color: #666;

    font-size: 1rem;
    line-height: 1.9;
}

/* ============================================
   FEATURED PRODUCT
============================================ */

.about-featured-product{
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 0;

    overflow: hidden;

    border-radius: 36px;

    background: #fff;

    margin-bottom: 3rem;

    box-shadow:
        0 30px 80px rgba(0,0,0,0.08);
}

/* IMAGE */
.about-featured-image{
    position: relative;
    min-height: 580px;

    background:
        linear-gradient(
            135deg,
            #f7efeb 0%,
            #fff 100%
        );
}

.about-featured-image img{
    width: 100%;
    height: 100%;
    object-fit: contain;

    padding: 3rem;
}

/* CONTENT */
.about-featured-content{
    padding: 4rem;
}

.featured-badge{
    display: inline-flex;

    padding: 0.7rem 1rem;

    border-radius: 999px;

    background: rgba(217,112,96,0.12);

    color: #D97060;

    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 1px;

    margin-bottom: 1.5rem;
}

.about-featured-content h3{
    color: #14183E;

    font-size: 3rem;
    font-weight: 900;
    line-height: 1.15;

    margin-bottom: 1.5rem;
}

.about-featured-content p{
    color: #666;

    font-size: 1rem;
    line-height: 1.9;

    margin-bottom: 2rem;
}

/* FEATURES */
.featured-features{
    display: flex;
    flex-direction: column;
    gap: 1rem;

    margin-bottom: 2.5rem;
}

.featured-item{
    padding: 1rem 1.2rem;

    border-radius: 18px;

    background: #faf7f5;

    border: 1px solid rgba(217,112,96,0.08);
}

.featured-item strong{
    display: block;

    color: #14183E;

    font-size: 1rem;
    font-weight: 800;

    margin-bottom: 0.3rem;
}

.featured-item span{
    color: #666;
    font-size: 0.9rem;
}

/* BUTTON */
.featured-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    padding: 1rem 2rem;

    border-radius: 16px;

    background: #D97060;
    color: #fff;

    text-decoration: none;

    font-size: 0.95rem;
    font-weight: 800;

    transition: all 0.3s ease;
}

.featured-btn:hover{
    background: #C65650;
    color: #fff;

    transform: translateY(-4px);
}

/* ============================================
   SMALL CARDS
============================================ */

.about-showcase-grid{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 1.5rem;
}

/* CARD BASE */
.showcase-card{
    overflow: hidden;
    border-radius: 28px;

    transition: all 0.35s ease;
}

.showcase-card:hover{
    transform: translateY(-8px);
}

/* IMAGE */
.showcase-image{
    height: 260px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #fff;
}

.showcase-image img{
    width: 100%;
    height: 100%;

    object-fit: contain;

    padding: 2rem;
}

/* CONTENT */
.showcase-content{
    padding: 2rem;
}

.showcase-content h4{
    font-size: 1.4rem;
    font-weight: 800;

    margin-bottom: 0.8rem;
}

.showcase-content p{
    font-size: 0.95rem;
    line-height: 1.8;

    margin: 0;
}

/* TYPE */
.showcase-type{
    display: inline-block;

    margin-bottom: 1rem;

    color: #D97060;

    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.showcase-type.light{
    color: rgba(255,255,255,0.75);
}

/* CARD 1 */
.showcase-card.minimal{
    background: #fff;

    box-shadow:
        0 15px 40px rgba(0,0,0,0.06);
}

/* CARD 2 */
.showcase-card.premium{
    background:
        linear-gradient(
            135deg,
            #D97060 0%,
            #C65650 100%
        );

    color: #fff;

    box-shadow:
        0 18px 45px rgba(217,112,96,0.22);
}

.premium-top{
    padding: 1.2rem 1.5rem 0;
}

.premium-top span{
    background: rgba(255,255,255,0.14);

    padding: 0.55rem 1rem;

    border-radius: 999px;

    font-size: 0.75rem;
    font-weight: 700;
}

.showcase-card.premium .showcase-image{
    background: transparent;
}

.showcase-card.premium h4,
.showcase-card.premium p{
    color: #fff;
}

/* CARD 3 */
.showcase-card.dark-card{
    background: #14183E;
    color: #fff;
}

.showcase-image.dark{
    background:
        linear-gradient(
            135deg,
            #1b204e 0%,
            #14183E 100%
        );
}

.showcase-card.dark-card h4,
.showcase-card.dark-card p{
    color: #fff;
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 991px){

    .about-showcase-section{
        padding: 5rem 0;
    }

    .about-featured-product{
        grid-template-columns: 1fr;
    }

    .about-featured-image{
        min-height: 420px;
    }

    .about-featured-content{
        padding: 3rem 2rem;
    }

    .about-featured-content h3{
        font-size: 2.4rem;
    }

    .about-showcase-grid{
        grid-template-columns: 1fr;
    }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 768px){

    .about-showcase-header{
        margin-bottom: 3rem;
    }

    .about-showcase-header h2{
        font-size: 2rem;
        line-height: 1.3;
    }

    .about-showcase-header p{
        font-size: 0.92rem;
    }

    .about-featured-product{
        border-radius: 26px;
    }

    .about-featured-image{
        min-height: 300px;
    }

    .about-featured-image img{
        padding: 1.5rem;
    }

    .about-featured-content{
        padding: 2rem 1.4rem;
    }

    .about-featured-content h3{
        font-size: 2rem;
    }

    .about-featured-content p{
        font-size: 0.92rem;
    }

    .showcase-image{
        height: 220px;
    }

    .showcase-content{
        padding: 1.5rem;
    }

    .showcase-content h4{
        font-size: 1.2rem;
    }

    .showcase-content p{
        font-size: 0.9rem;
    }

}

</style>

<!-- ============================================-->
<!-- CTA SECTION -->
<!-- ============================================-->
<section class="about-cta-section">

    <!-- Background Glow -->
    <div class="about-cta-glow about-cta-glow-1"></div>
    <div class="about-cta-glow about-cta-glow-2"></div>

    <div class="container position-relative">

        <div class="about-cta-wrapper">

            <span class="about-cta-label">
                Premium Quality Since 1993
            </span>

            <h2>
                Siap tampil lebih elegan <br>
                dengan songkok premium Tebu Mas?
            </h2>

            <p>
                Kami menghadirkan songkok berkualitas dengan desain elegan,
                jahitan rapi, dan kenyamanan maksimal untuk kebutuhan formal
                maupun penggunaan sehari-hari.
            </p>

            <!-- CTA BUTTON -->
            <div class="about-cta-buttons">

                <a href="{{ route('products') }}" class="about-cta-btn primary">
                    Lihat Katalog
                </a>

                <a href="https://wa.me/6281234567890"
                   target="_blank"
                   class="about-cta-btn secondary">
                    Hubungi Kami
                </a>

            </div>

            <!-- MINI INFO -->
            <div class="about-cta-info">

                <div class="about-cta-info-item">
                    <strong>30+</strong>
                    <span>Tahun Pengalaman</span>
                </div>

                <div class="about-cta-info-item">
                    <strong>10K+</strong>
                    <span>Pelanggan Puas</span>
                </div>

                <div class="about-cta-info-item">
                    <strong>Premium</strong>
                    <span>Kualitas Terbaik</span>
                </div>

            </div>

        </div>

    </div>
</section>

<style>

/* ============================================
   CTA SECTION
============================================ */

.about-cta-section{
    position: relative;
    overflow: hidden;

    padding: 7rem 0;

    background:
        linear-gradient(
            135deg,
            #D97060 0%,
            #C65650 50%,
            #A84A40 100%
        );
}

/* GLOW */
.about-cta-glow{
    position: absolute;
    border-radius: 50%;
    filter: blur(10px);
}

.about-cta-glow-1{
    width: 420px;
    height: 420px;

    top: -160px;
    right: -120px;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,0.18) 0%,
            transparent 70%
        );
}

.about-cta-glow-2{
    width: 320px;
    height: 320px;

    bottom: -120px;
    left: -100px;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,0.12) 0%,
            transparent 70%
        );
}

/* WRAPPER */
.about-cta-wrapper{
    position: relative;
    z-index: 2;

    max-width: 920px;
    margin: 0 auto;

    text-align: center;

    padding: 4rem;

    border-radius: 34px;

    background:
        rgba(255,255,255,0.10);

    backdrop-filter: blur(12px);

    border:
        1px solid rgba(255,255,255,0.18);

    box-shadow:
        0 30px 80px rgba(0,0,0,0.18);
}

/* LABEL */
.about-cta-label{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    padding: 0.8rem 1.4rem;
    margin-bottom: 1.5rem;

    border-radius: 999px;

    background:
        rgba(255,255,255,0.15);

    color: #fff;

    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;

    border:
        1px solid rgba(255,255,255,0.18);
}

/* TITLE */
.about-cta-wrapper h2{
    color: #fff;

    font-size: 3.4rem;
    font-weight: 900;
    line-height: 1.15;

    margin-bottom: 1.5rem;
}

/* TEXT */
.about-cta-wrapper p{
    max-width: 720px;
    margin: 0 auto;

    color:
        rgba(255,255,255,0.88);

    font-size: 1.05rem;
    line-height: 1.9;

    margin-bottom: 2.5rem;
}

/* BUTTONS */
.about-cta-buttons{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;

    flex-wrap: wrap;

    margin-bottom: 3rem;
}

.about-cta-btn{
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: 190px;

    padding: 1rem 2rem;

    border-radius: 16px;

    text-decoration: none;

    font-size: 0.95rem;
    font-weight: 800;

    transition: all 0.3s ease;
}

/* PRIMARY */
.about-cta-btn.primary{
    background: #fff;
    color: #D97060;

    box-shadow:
        0 16px 35px rgba(0,0,0,0.18);
}

.about-cta-btn.primary:hover{
    transform: translateY(-5px);

    color: #D97060;
}

/* SECONDARY */
.about-cta-btn.secondary{
    background:
        rgba(255,255,255,0.10);

    color: #fff;

    border:
        1px solid rgba(255,255,255,0.25);
}

.about-cta-btn.secondary:hover{
    background:
        rgba(255,255,255,0.16);

    color: #fff;

    transform: translateY(-5px);
}

/* INFO */
.about-cta-info{
    display: flex;
    justify-content: center;
    gap: 1rem;

    flex-wrap: wrap;
}

.about-cta-info-item{
    min-width: 180px;

    padding: 1.2rem 1rem;

    border-radius: 20px;

    background:
        rgba(255,255,255,0.10);

    border:
        1px solid rgba(255,255,255,0.12);
}

.about-cta-info-item strong{
    display: block;

    color: #fff;

    font-size: 1.5rem;
    font-weight: 900;

    margin-bottom: 0.4rem;
}

.about-cta-info-item span{
    color:
        rgba(255,255,255,0.8);

    font-size: 0.9rem;
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 991px){

    .about-cta-section{
        padding: 5rem 0;
    }

    .about-cta-wrapper{
        padding: 3rem 2rem;
        border-radius: 28px;
    }

    .about-cta-wrapper h2{
        font-size: 2.6rem;
    }

    .about-cta-wrapper p{
        font-size: 0.98rem;
    }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 768px){

    .about-cta-section{
        padding: 4rem 0;
    }

    .about-cta-wrapper{
        padding: 2.3rem 1.3rem;
        border-radius: 24px;
    }

    .about-cta-label{
        font-size: 0.72rem;
        padding: 0.7rem 1rem;
    }

    .about-cta-wrapper h2{
        font-size: 2rem;
        line-height: 1.3;
    }

    .about-cta-wrapper p{
        font-size: 0.92rem;
        line-height: 1.8;

        margin-bottom: 2rem;
    }

    .about-cta-buttons{
        flex-direction: column;
    }

    .about-cta-btn{
        width: 100%;
    }

    .about-cta-info{
        flex-direction: column;
    }

    .about-cta-info-item{
        width: 100%;
        min-width: unset;
    }

}

</style>

@endsection
