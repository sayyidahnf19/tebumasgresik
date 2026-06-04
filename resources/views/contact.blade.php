@extends('layouts.app')

@section('title', 'Kontak Kami - Tebu Mas Gresik')
@section('description', 'Hubungi Tebu Mas Gresik - Produsen Songkok Berkualitas. Kami siap membantu Anda dengan pertanyaan atau pesanan.')

@section('content')

<!-- SVG sprite: ikon-ikon profesional untuk halaman kontak -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="icon-envelope" viewBox="0 0 24 24">
    <path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
  </symbol>
  <symbol id="icon-map" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
  </symbol>
  <symbol id="icon-clock" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12 1a11 11 0 1 0 11 11A11.013 11.013 0 0 0 12 1zm1 12.59V7h-2v6l5 3 .9-1.54z"/>
  </symbol>
  <symbol id="icon-phone" viewBox="0 0 24 24">
    <path fill="currentColor" d="M6.6 10.79a15.05 15.05 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1.05-.24c1.12.45 2.33.69 3.57.69a1 1 0 0 1 1 1v3.5a1 1 0 0 1-1 1A17 17 0 0 1 3 5a1 1 0 0 1 1-1H7.5a1 1 0 0 1 1 1c0 1.24.24 2.45.69 3.57a1 1 0 0 1-.24 1.05l-2.35 2.17z"/>
  </symbol>
  <symbol id="icon-bolt" viewBox="0 0 24 24">
    <path fill="currentColor" d="M13 2L3 14h7l-1 8 10-12h-7z"/>
  </symbol>
  <symbol id="icon-location-arrow" viewBox="0 0 24 24">
    <path fill="currentColor" d="M21 11l-9 9v-6H3V2z"/>
  </symbol>
  <symbol id="icon-paper-plane" viewBox="0 0 24 24">
    <path fill="currentColor" d="M2 21l21-9L2 3v7l15 2-15 2z"/>
  </symbol>
  <symbol id="icon-shield" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12 1l7 3v5c0 5-3.8 9.7-7 11-3.2-1.3-7-6-7-11V4l7-3z"/>
  </symbol>
</svg>
<!-- ============================================-->
<!-- CONTACT HERO SECTION -->
<!-- ============================================-->

<style>

/* ============================================
   CONTACT HERO
============================================ */

.contact-hero-section {
  position: relative;
  overflow: hidden;

  padding: 9rem 0 7rem;

  background:
    linear-gradient(
      135deg,
      #D97060 0%,
      #C65650 45%,
      #A84A40 100%
    );
}

/* ============================================
   BACKGROUND GLOW
============================================ */

.contact-hero-glow {
  position: absolute;
  border-radius: 50%;

  filter: blur(10px);
}

.contact-glow-1 {
  width: 420px;
  height: 420px;

  top: -180px;
  right: -120px;

  background: rgba(255,255,255,0.10);
}

.contact-glow-2 {
  width: 320px;
  height: 320px;

  bottom: -120px;
  left: -80px;

  background: rgba(255,255,255,0.08);
}

/* ============================================
   CONTENT
============================================ */

.contact-hero-content {
  position: relative;
  z-index: 10;

  max-width: 850px;
  margin: 0 auto;

  text-align: center;
}

/* LABEL */

.contact-hero-label {
  display: inline-flex;
  align-items: center;
  gap: 10px;

  padding: 0.8rem 1.4rem;
  margin-bottom: 1.8rem;

  border-radius: 999px;

  background: rgba(255,255,255,0.14);

  border: 1px solid rgba(255,255,255,0.18);

  backdrop-filter: blur(12px);

  color: rgba(255,255,255,0.95);

  font-size: 0.82rem;
  font-weight: 800;

  letter-spacing: 1px;
  text-transform: uppercase;
}

/* TITLE */

.contact-hero-content h1 {
  color: #fff;

  font-size: 4rem;
  font-weight: 900;

  line-height: 1.08;

  margin-bottom: 1.5rem;
}

/* TEXT */

.contact-hero-content p {
  max-width: 720px;

  margin: 0 auto 2.5rem;

  color: rgba(255,255,255,0.88);

  font-size: 1.05rem;
  line-height: 1.9;
}

/* ============================================
   FEATURE BOX
============================================ */

.contact-hero-features {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 1rem;
}

.contact-feature-box {
  min-width: 180px;

  padding: 1rem 1.3rem;

  border-radius: 20px;

  background: rgba(255,255,255,0.12);

  border: 1px solid rgba(255,255,255,0.14);

  backdrop-filter: blur(12px);

  box-shadow:
    0 10px 30px rgba(0,0,0,0.08);

  transition: all 0.3s ease;
}

.contact-feature-box:hover {
  transform: translateY(-5px);

  background: rgba(255,255,255,0.18);
}

.contact-feature-box h4 {
  color: #fff;

  font-size: 1.1rem;
  font-weight: 800;

  margin-bottom: 0.35rem;
}

.contact-feature-box span {
  color: rgba(255,255,255,0.8);

  font-size: 0.88rem;
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 1023px) {

  .contact-hero-section {
    padding: 8rem 0 6rem;
  }

  .contact-hero-content h1 {
    font-size: 3rem;
  }

  .contact-hero-content p {
    font-size: 1rem;
  }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 768px) {

  .contact-hero-section {
    padding: 7rem 0 5rem;
  }

  .contact-hero-label {
    font-size: 0.75rem;

    padding: 0.7rem 1.1rem;
  }

  .contact-hero-content h1 {
    font-size: 2.2rem;
    line-height: 1.2;
  }

  .contact-hero-content p {
    font-size: 0.95rem;
    line-height: 1.8;

    margin-bottom: 2rem;
  }

  .contact-hero-features {
    flex-direction: column;
    align-items: center;
  }

  .contact-feature-box {
    width: 100%;
    max-width: 100%;
  }

}

</style>

<section class="contact-hero-section">

    <!-- Glow -->
    <div class="contact-hero-glow contact-glow-1"></div>
    <div class="contact-hero-glow contact-glow-2"></div>

    <div class="container">

        <div class="contact-hero-content">

            <!-- LABEL -->
            <div class="contact-hero-label">
                Mari Terhubung Bersama Kami
            </div>

            <!-- TITLE -->
            <h1>
                Kami Siap Mendengarkan
                dan Membantu Anda
            </h1>

            <!-- DESCRIPTION -->
            <p>
                Tebu Mas Gresik selalu siap memberikan pelayanan terbaik
                untuk setiap kebutuhan Anda. Hubungi kami melalui berbagai
                saluran komunikasi dan dapatkan respon cepat,
                ramah, serta profesional.
            </p>

            <!-- FEATURES -->
            <div class="contact-hero-features">

                <div class="contact-feature-box">
                    <h4>Fast Response</h4>
                    <span>Respon cepat & terpercaya</span>
                </div>

                <div class="contact-feature-box">
                    <h4>Professional</h4>
                    <span>Pelayanan ramah & profesional</span>
                </div>

                <div class="contact-feature-box">
                    <h4>30+ Years</h4>
                    <span>Berpengalaman sejak 1993</span>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ============================================-->
<!-- CONTACT CHANNEL SECTION -->
<!-- ============================================-->

<style>

/* ============================================
   CONTACT CHANNEL
============================================ */

.contact-channel-section {
  position: relative;

  padding: 0 0 6rem;
  margin-top: -4rem;

  z-index: 5;
}

/* ============================================
   MAIN CARD
============================================ */

.contact-main-card {
  position: relative;
  overflow: hidden;

  height: 100%;

  padding: 3rem;

  border-radius: 32px;

  background:
    linear-gradient(
      135deg,
      #ffffff 0%,
      #fff7f5 100%
    );

  border: 1px solid rgba(217,112,96,0.12);

  box-shadow:
    0 20px 60px rgba(0,0,0,0.06);

  transition: all 0.35s ease;
}

.contact-main-card:hover {
  transform: translateY(-10px);

  box-shadow:
    0 30px 70px rgba(217,112,96,0.14);
}

/* BG GLOW */

.contact-main-glow {
  position: absolute;

  width: 240px;
  height: 240px;

  top: -100px;
  right: -100px;

  border-radius: 50%;

  background:
    radial-gradient(
      circle,
      rgba(217,112,96,0.15),
      transparent
    );
}

/* ICON */

.contact-main-icon {
  width: 82px;
  height: 82px;

  display: flex;
  align-items: center;
  justify-content: center;

  margin-bottom: 2rem;

  border-radius: 24px;

  background:
    linear-gradient(
      135deg,
      #D97060,
      #C65650
    );

  color: #fff;

  font-size: 2.2rem;

  box-shadow:
    0 15px 35px rgba(217,112,96,0.25);
}

/* CONTENT */

.contact-main-card h3 {
  color: #14183E;

  font-size: 2rem;
  font-weight: 900;

  margin-bottom: 1rem;
}

.contact-main-card p {
  color: #667085;

  line-height: 1.9;

  margin-bottom: 1.8rem;
}

.contact-main-number {
  display: inline-block;

  margin-bottom: 2rem;

  color: #D97060;

  font-size: 1.2rem;
  font-weight: 800;

  text-decoration: none;
}

/* BUTTON */

.contact-main-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;

  padding: 1rem 1.6rem;

  border-radius: 16px;

  background:
    linear-gradient(
      135deg,
      #D97060,
      #C65650
    );

  color: #fff;

  font-size: 0.95rem;
  font-weight: 700;

  text-decoration: none;

  transition: all 0.3s ease;
}

.contact-main-btn:hover {
  transform: translateY(-4px);

  color: #fff;

  box-shadow:
    0 15px 35px rgba(217,112,96,0.3);
}

/* ============================================
   SIDE CARD
============================================ */

.contact-side-wrapper {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;

  height: 100%;
}

.contact-side-card {
  height: 100%;

  padding: 2rem;

  border-radius: 26px;

  background: #fff;

  border: 1px solid rgba(0,0,0,0.05);

  box-shadow:
    0 15px 40px rgba(0,0,0,0.04);

  transition: all 0.3s ease;
}

.contact-side-card:hover {
  transform: translateY(-8px);

  box-shadow:
    0 22px 50px rgba(0,0,0,0.08);
}

.contact-side-icon {
  width: 62px;
  height: 62px;

  display: flex;
  align-items: center;
  justify-content: center;

  margin-bottom: 1.4rem;

  border-radius: 18px;

  background:
    linear-gradient(
      135deg,
      rgba(217,112,96,0.12),
      rgba(217,112,96,0.04)
    );

  color: #D97060;

  font-size: 1.5rem;
}

.contact-side-card h5 {
  color: #14183E;

  font-size: 1.2rem;
  font-weight: 800;

  margin-bottom: 0.8rem;
}

.contact-side-card a,
.contact-side-card p {
  color: #667085;

  line-height: 1.8;

  text-decoration: none;

  margin: 0;
}

/* ============================================
   INFO BAR
============================================ */

.contact-info-bar {
  margin-top: 2rem;

  padding: 2.2rem;

  border-radius: 30px;

  background: #fff;

  border: 1px solid rgba(0,0,0,0.05);

  box-shadow:
    0 15px 45px rgba(0,0,0,0.05);
}

.contact-info-item {
  display: flex;
  gap: 1rem;
}

.contact-info-icon {
  width: 56px;
  height: 56px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 16px;

  background:
    linear-gradient(
      135deg,
      rgba(217,112,96,0.12),
      rgba(217,112,96,0.04)
    );

  color: #D97060;

  font-size: 1.3rem;
}

.contact-info-item h6 {
  color: #14183E;

  font-size: 0.9rem;
  font-weight: 800;

  letter-spacing: 0.5px;
  text-transform: uppercase;

  margin-bottom: 0.6rem;
}

.contact-info-item p,
.contact-info-item a {
  color: #667085;

  text-decoration: none;

  line-height: 1.8;

  margin: 0;
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 1023px) {

  .contact-channel-section {
    margin-top: -3rem;
  }

  .contact-main-card {
    padding: 2.5rem;
  }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 768px) {

  .contact-channel-section {
    padding-bottom: 4rem;
  }

  .contact-main-card,
  .contact-side-card,
  .contact-info-bar {
    border-radius: 24px;
  }

  .contact-main-card {
    padding: 2rem;
  }

  .contact-main-card h3 {
    font-size: 1.6rem;
  }

  .contact-main-icon {
    width: 72px;
    height: 72px;

    font-size: 2rem;
  }

  .contact-info-item {
    align-items: flex-start;
  }

}

</style>

<section class="contact-channel-section">

    <div class="container">

        <div class="row g-4 align-items-stretch">

            <!-- LEFT -->
            <div class="col-lg-6">

                <div class="contact-main-card">

                    <div class="contact-main-glow"></div>

                    <div class="contact-main-icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="color: #fff;">
                          <use href="#icon-phone" fill="currentColor"></use>
                        </svg>
                    </div>

                    <h3>
                        Hubungi Kami
                        Melalui WhatsApp
                    </h3>

                    <p>
                        Tim Tebu Mas Gresik siap membantu kebutuhan Anda
                        dengan pelayanan cepat, ramah, dan profesional.
                    </p>

                    <a
                        href="https://wa.me/6287702885164"
                        class="contact-main-number"
                    >
                        +62 877 0288 5164
                    </a>

                    <br>

                    <a
                      href="https://wa.me/6287702885164"
                      target="_blank"
                      class="contact-main-btn"
                    >
                      Chat Sekarang
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="color: #fff;">
                        <use href="#icon-location-arrow" fill="currentColor"></use>
                      </svg>
                    </a>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-6">

                <div class="contact-side-wrapper">

                    <!-- EMAIL -->
                    <div class="contact-side-card">

                        <div class="contact-side-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true" style="color: #D97060;">
                              <use href="#icon-envelope" fill="currentColor"></use>
                            </svg>
                        </div>

                        <h5>Email</h5>

                        <a href="mailto:info@tebumasgresik.com">
                            info@tebumasgresik.com
                        </a>

                    </div>

                    <!-- LOCATION -->
                    <div class="contact-side-card">

                        <div class="contact-side-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true" style="color: #D97060;">
                              <use href="#icon-map" fill="currentColor"></use>
                            </svg>
                        </div>

                        <h5>Lokasi</h5>

                        <p>
                            Jl. Sindujoyo 2 A No. 6<br>
                            Kroman, Gresik<br>
                            Jawa Timur
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- INFO BAR -->
        <div class="contact-info-bar">

            <div class="row g-4">

                <!-- HOURS -->
                <div class="col-md-4">

                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" style="color: #D97060;">
                              <use href="#icon-clock" fill="currentColor"></use>
                            </svg>
                        </div>

                        <div>

                            <h6>Jam Operasional</h6>

                            <p>
                                Senin - Jumat<br>
                                08:00 - 17:00
                            </p>

                        </div>

                    </div>

                </div>

                <!-- PHONE -->
                <div class="col-md-4">

                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" style="color: #D97060;">
                              <use href="#icon-phone" fill="currentColor"></use>
                            </svg>
                        </div>

                        <div>

                            <h6>Telepon</h6>

                            <a href="tel:+6203437461234">
                                +62 0343 746 1234
                            </a>

                        </div>

                    </div>

                </div>

                <!-- RESPONSE -->
                <div class="col-md-4">

                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" style="color: #D97060;">
                              <use href="#icon-bolt" fill="currentColor"></use>
                            </svg>
                        </div>

                        <div>

                            <h6>Response Time</h6>

                            <p>
                                Fast Response<br>
                                Setiap Hari
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ============================================-->
<!-- CONTACT FORM & MAP SECTION -->
<!-- ============================================-->
<section class="contact-form-section">

    <div class="container">

        <div class="row g-4 g-xl-5 align-items-stretch">

            <!-- LEFT -->
            <div class="col-lg-6">

                <div class="contact-form-wrapper">

                    <div class="contact-form-heading">

                        <span class="contact-label">
                            Hubungi Kami
                        </span>

                        <h2>
                            Kirim Pesan
                            Kepada Kami
                        </h2>

                        <p>
                            Isi form berikut dan tim Tebu Mas Gresik
                            akan segera menghubungi Anda dengan
                            pelayanan yang cepat dan profesional.
                        </p>

                    </div>

                    <form method="POST" action="#" class="contact-form">

                        <div class="contact-input-group">

                            <label>
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                placeholder="Masukkan nama lengkap"
                                required
                            >

                        </div>

                        <div class="contact-input-group">

                            <label>
                                Email
                            </label>

                            <input
                                type="email"
                                placeholder="email@example.com"
                                required
                            >

                        </div>

                        <div class="contact-input-group">

                            <label>
                                WhatsApp / Telepon
                            </label>

                            <input
                                type="tel"
                                placeholder="+62 87702885164"
                                required
                            >

                        </div>

                        <div class="contact-input-group">

                            <label>
                                Subjek
                            </label>

                            <select required>

                                <option value="">
                                    Pilih Subjek
                                </option>

                                <option value="pesanan">
                                    Pertanyaan Pesanan
                                </option>

                                <option value="harga">
                                    Pertanyaan Harga
                                </option>

                                <option value="garansi">
                                    Pertanyaan Garansi
                                </option>

                                <option value="komplain">
                                    Keluhan / Komplain
                                </option>

                                <option value="lainnya">
                                    Lainnya
                                </option>

                            </select>

                        </div>

                        <div class="contact-input-group">

                            <label>
                                Pesan
                            </label>

                            <textarea
                                rows="5"
                                placeholder="Tulis pesan Anda di sini..."
                                required
                            ></textarea>

                        </div>

                        <button type="submit" class="contact-submit-btn">

                            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" style="vertical-align:middle; margin-right:6px;">
                              <use href="#icon-paper-plane" fill="currentColor"></use>
                            </svg>

                            Kirim Pesan

                        </button>

                        <p class="contact-note">
                            Kami akan merespon pesan Anda secepat mungkin.
                        </p>

                    </form>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-6">

                <div class="contact-map-wrapper">

                    <div class="contact-map-heading">

                        <span class="contact-label">
                            Lokasi Kami
                        </span>

                        <h2>
                            Kunjungi
                            Tebu Mas Gresik
                        </h2>

                        <p>
                            Datang langsung ke lokasi kami untuk melihat
                            kualitas produksi songkok premium Tebu Mas Gresik.
                        </p>

                    </div>

                    <!-- MAP -->
                    <div class="contact-map-card">

                        <iframe
                            src="https://www.google.com/maps?q=Jl.+Sindujoyo+2+A+No.+6+Kroman+Gresik&output=embed"
                            title="Lokasi Tebu Mas Gresik"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>

                    <!-- INFO -->
                    <div class="contact-info-grid">

                        <div class="contact-info-card">

                            <div class="contact-info-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" style="color:#D97060;">
                                  <use href="#icon-map" fill="currentColor"></use>
                                </svg>
                            </div>

                            <div>

                                <h5>
                                    Alamat
                                </h5>

                                <p>
                                    Jl. Sindujoyo 2 A No. 6,
                                    Kroman, Gresik,
                                    Jawa Timur
                                </p>

                            </div>

                        </div>

                        <div class="contact-info-card">

                            <div class="contact-info-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" style="color:#D97060;">
                                  <use href="#icon-clock" fill="currentColor"></use>
                                </svg>
                            </div>

                            <div>

                                <h5>
                                    Jam Operasional
                                </h5>

                                <p>
                                    Senin - Jumat :
                                    08.00 - 17.00
                                </p>

                                <p>
                                    Sabtu :
                                    08.00 - 13.00
                                </p>

                            </div>

                        </div>

                    </div>

                    <a
                        href="https://maps.google.com/?q=Jl.+Sindujoyo+2+A+No.+6+Kroman+Gresik"
                        target="_blank"
                        class="contact-maps-btn"
                    >

                        <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" style="vertical-align:middle; margin-right:8px; color:#fff;">
                          <use href="#icon-location-arrow" fill="currentColor"></use>
                        </svg>

                        Buka Google Maps

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

/* ============================================
   CONTACT FORM SECTION
============================================ */

.contact-form-section {
  position: relative;
  overflow: hidden;

  padding: 7rem 0;

  background:
    linear-gradient(
      180deg,
      #fafafa 0%,
      #ffffff 100%
    );
}

/* ============================================
   LABEL
============================================ */

.contact-label {
  display: inline-flex;
  align-items: center;

  padding: 0.7rem 1.2rem;
  margin-bottom: 1.2rem;

  border-radius: 999px;

  background: rgba(217,112,96,0.10);

  color: #D97060;

  font-size: 0.78rem;
  font-weight: 800;
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* ============================================
   WRAPPER
============================================ */

.contact-form-wrapper,
.contact-map-wrapper {
  height: 100%;

  padding: 3rem;

  border-radius: 32px;

  background: #fff;

  border: 1px solid rgba(0,0,0,0.05);

  box-shadow:
    0 20px 60px rgba(0,0,0,0.06);
}

/* ============================================
   HEADINGS
============================================ */

.contact-form-heading,
.contact-map-heading {
  margin-bottom: 2.2rem;
}

.contact-form-heading h2,
.contact-map-heading h2 {
  color: #14183E;

  font-size: 2.5rem;
  font-weight: 900;
  line-height: 1.15;

  margin-bottom: 1rem;
}

.contact-form-heading p,
.contact-map-heading p {
  color: #667085;

  font-size: 1rem;
  line-height: 1.9;

  margin: 0;
}

/* ============================================
   FORM
============================================ */

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 1.3rem;
}

.contact-input-group label {
  display: block;

  color: #14183E;

  font-size: 0.92rem;
  font-weight: 700;

  margin-bottom: 0.7rem;
}

.contact-input-group input,
.contact-input-group select,
.contact-input-group textarea {
  width: 100%;

  padding: 1rem 1.2rem;

  border-radius: 16px;
  border: 1px solid #ececec;

  background: #fafafa;

  color: #14183E;

  font-size: 0.95rem;

  transition: all 0.3s ease;
}

.contact-input-group input:focus,
.contact-input-group select:focus,
.contact-input-group textarea:focus {
  outline: none;

  border-color: #D97060;

  background: #fff;

  box-shadow:
    0 0 0 5px rgba(217,112,96,0.10);
}

.contact-input-group textarea {
  resize: vertical;
  min-height: 140px;
}

/* ============================================
   BUTTON
============================================ */

.contact-submit-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;

  width: 100%;

  padding: 1rem 1.5rem;

  border: none;
  border-radius: 18px;

  background:
    linear-gradient(
      135deg,
      #D97060 0%,
      #C65650 100%
    );

  color: #fff;

  font-size: 1rem;
  font-weight: 800;

  transition: all 0.3s ease;
}

.contact-submit-btn:hover {
  transform: translateY(-4px);

  box-shadow:
    0 18px 40px rgba(217,112,96,0.28);
}

.contact-note {
  margin-top: 0.8rem;

  text-align: center;

  color: #98A2B3;

  font-size: 0.85rem;
}

/* ============================================
   MAP
============================================ */

.contact-map-card {
  overflow: hidden;

  height: 360px;

  border-radius: 26px;

  margin-bottom: 1.5rem;

  border: 1px solid rgba(0,0,0,0.05);

  box-shadow:
    0 15px 40px rgba(0,0,0,0.06);
}

.contact-map-card iframe {
  width: 100%;
  height: 100%;

  border: none;
}

/* ============================================
   INFO GRID
============================================ */

.contact-info-grid {
  display: grid;
  gap: 1rem;

  margin-bottom: 1.5rem;
}

.contact-info-card {
  display: flex;
  gap: 1rem;

  padding: 1.3rem;

  border-radius: 22px;

  background: #fafafa;

  border: 1px solid rgba(0,0,0,0.05);

  transition: all 0.3s ease;
}

.contact-info-card:hover {
  transform: translateY(-4px);

  background: #fff;

  box-shadow:
    0 14px 35px rgba(0,0,0,0.06);
}

.contact-info-icon {
  width: 56px;
  height: 56px;

  flex-shrink: 0;

  border-radius: 18px;

  background:
    linear-gradient(
      135deg,
      rgba(217,112,96,0.12),
      rgba(217,112,96,0.05)
    );

  display: flex;
  align-items: center;
  justify-content: center;

  color: #D97060;

  font-size: 1.2rem;
}

.contact-info-card h5 {
  color: #14183E;

  font-size: 1rem;
  font-weight: 800;

  margin-bottom: 0.5rem;
}

.contact-info-card p {
  color: #667085;

  font-size: 0.9rem;
  line-height: 1.7;

  margin: 0;
}

/* ============================================
   MAP BUTTON
============================================ */

.contact-maps-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;

  width: 100%;

  padding: 1rem 1.5rem;

  border-radius: 18px;

  background: #14183E;
  color: #fff;

  text-decoration: none;

  font-size: 0.95rem;
  font-weight: 700;

  transition: all 0.3s ease;
}

.contact-maps-btn:hover {
  background: #0f122f;

  color: #fff;

  transform: translateY(-4px);
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 1023px) {

  .contact-form-section {
    padding: 5.5rem 0;
  }

  .contact-form-wrapper,
  .contact-map-wrapper {
    padding: 2.2rem;
  }

  .contact-form-heading h2,
  .contact-map-heading h2 {
    font-size: 2rem;
  }

  .contact-map-card {
    height: 320px;
  }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 768px) {

  .contact-form-section {
    padding: 4.5rem 0;
  }

  .contact-form-wrapper,
  .contact-map-wrapper {
    padding: 1.5rem;

    border-radius: 24px;
  }

  .contact-form-heading,
  .contact-map-heading {
    text-align: center;
  }

  .contact-form-heading h2,
  .contact-map-heading h2 {
    font-size: 1.8rem;
    line-height: 1.2;
  }

  .contact-form-heading p,
  .contact-map-heading p {
    font-size: 0.95rem;
  }

  .contact-map-card {
    height: 280px;

    border-radius: 20px;
  }

  .contact-info-card {
    padding: 1rem;
  }

  .contact-info-icon {
    width: 48px;
    height: 48px;

    border-radius: 14px;

    font-size: 1rem;
  }

}

</style>


<!-- ============================================-->
<!-- CTA SECTION -->
<!-- ============================================-->

<section class="contact-cta-section">

    <!-- BG DECOR -->
    <div class="contact-cta-blur blur-1"></div>
    <div class="contact-cta-blur blur-2"></div>

    <div class="container">

        <div class="contact-cta-wrapper">

            <!-- TOP -->
            <div class="contact-cta-content">

                <span class="contact-cta-label">
                    Tebu Mas Gresik
                </span>

                <h2>
                    Siap Berkolaborasi
                    Bersama Kami?
                </h2>

                <p>
                    Konsultasikan kebutuhan songkok Anda bersama tim
                    profesional kami dan dapatkan pelayanan terbaik
                    dengan kualitas premium khas Tebu Mas Gresik.
                </p>

            </div>

            <!-- ACTION -->
            <div class="contact-cta-actions">

                <a 
                  href="https://wa.me/6287702885164"
                  target="_blank"
                  class="contact-cta-primary"
                >
                  <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" style="vertical-align:middle; margin-right:8px; color:#fff;">
                    <use href="#icon-phone" fill="currentColor"></use>
                  </svg>
                  Chat WhatsApp
                </a>

                <a 
                  href="mailto:info@tebumasgresik.com"
                  class="contact-cta-secondary"
                >
                  <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" style="vertical-align:middle; margin-right:8px; color: #D97060;">
                    <use href="#icon-envelope" fill="currentColor"></use>
                  </svg>
                  Kirim Email
                </a>

            </div>

            <!-- BOTTOM INFO -->
            <div class="contact-cta-info">

                <div class="contact-cta-info-item">

                    <div class="contact-cta-info-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" style="color:#D97060;">
                          <use href="#icon-clock" fill="currentColor"></use>
                        </svg>
                    </div>

                    <div>
                        <h6>Jam Operasional</h6>
                        <p>Senin - Sabtu • 08:00 - 17:00</p>
                    </div>

                </div>

                <div class="contact-cta-divider"></div>

                <div class="contact-cta-info-item">

                    <div class="contact-cta-info-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" style="color:#D97060;">
                          <use href="#icon-phone" fill="currentColor"></use>
                        </svg>
                    </div>

                    <div>
                        <h6>Customer Service</h6>
                        <p>Fast Response & Friendly Support</p>
                    </div>

                </div>

                <div class="contact-cta-divider"></div>

                <div class="contact-cta-info-item">

                    <div class="contact-cta-info-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" style="color:#D97060;">
                          <use href="#icon-shield" fill="currentColor"></use>
                        </svg>
                    </div>

                    <div>
                        <h6>Kualitas Premium</h6>
                        <p>Produksi Rapi & Profesional</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<style>

/* ============================================
   CTA SECTION
============================================ */

.contact-cta-section {
    position: relative;
    overflow: hidden;

    padding: 6rem 0;

    background:
        linear-gradient(
            135deg,
            #D97060 0%,
            #C65650 50%,
            #A84A40 100%
        );
}

/* ============================================
   BLUR
============================================ */

.contact-cta-blur {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.blur-1 {
    top: -180px;
    right: -140px;

    width: 420px;
    height: 420px;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,0.14) 0%,
            transparent 70%
        );
}

.blur-2 {
    bottom: -150px;
    left: -120px;

    width: 320px;
    height: 320px;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,0.08) 0%,
            transparent 70%
        );
}

/* ============================================
   WRAPPER
============================================ */

.contact-cta-wrapper {
    position: relative;
    z-index: 2;

    padding: 4rem;

    border-radius: 36px;

    background:
        rgba(255,255,255,0.08);

    backdrop-filter: blur(14px);

    border:
        1px solid rgba(255,255,255,0.12);

    box-shadow:
        0 25px 60px rgba(0,0,0,0.16);
}

/* ============================================
   CONTENT
============================================ */

.contact-cta-content {
    text-align: center;

    max-width: 760px;
    margin: 0 auto 2.8rem auto;
}

.contact-cta-label {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    padding: 0.7rem 1.3rem;
    margin-bottom: 1.5rem;

    border-radius: 999px;

    background:
        rgba(255,255,255,0.14);

    color: rgba(255,255,255,0.92);

    font-size: 0.8rem;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.contact-cta-content h2 {
    color: #fff;

    font-size: 3.2rem;
    font-weight: 900;
    line-height: 1.12;

    margin-bottom: 1.3rem;
}

.contact-cta-content p {
    color: rgba(255,255,255,0.86);

    font-size: 1rem;
    line-height: 1.9;

    margin: 0;
}

/* ============================================
   BUTTONS
============================================ */

.contact-cta-actions {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;

    margin-bottom: 3rem;
}

.contact-cta-primary,
.contact-cta-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.7rem;

    min-width: 220px;

    padding: 1rem 2rem;

    border-radius: 16px;

    text-decoration: none;

    font-size: 0.95rem;
    font-weight: 700;

    transition: all 0.35s ease;
}

.contact-cta-primary {
    background: #fff;
    color: #D97060;

    box-shadow:
        0 18px 35px rgba(0,0,0,0.14);
}

.contact-cta-primary:hover {
    transform: translateY(-5px);

    color: #C65650;

    box-shadow:
        0 22px 40px rgba(0,0,0,0.18);
}

.contact-cta-secondary {
    border:
        1px solid rgba(255,255,255,0.24);

    background:
        rgba(255,255,255,0.08);

    color: #fff;
}

.contact-cta-secondary:hover {
    transform: translateY(-5px);

    background:
        rgba(255,255,255,0.14);

    color: #fff;
}

/* ============================================
   INFO
============================================ */

.contact-cta-info {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.8rem;
}

.contact-cta-info-item {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.contact-cta-info-icon {
    width: 54px;
    height: 54px;

    border-radius: 16px;

    background:
        rgba(255,255,255,0.12);

    display: flex;
    align-items: center;
    justify-content: center;

    color: #fff;

    font-size: 1.1rem;

    flex-shrink: 0;
}

.contact-cta-info-item h6 {
    color: #fff;

    font-size: 0.92rem;
    font-weight: 700;

    margin-bottom: 0.3rem;
}

.contact-cta-info-item p {
    color: rgba(255,255,255,0.74);

    font-size: 0.88rem;

    margin: 0;
}

.contact-cta-divider {
    width: 1px;
    height: 55px;

    background:
        rgba(255,255,255,0.12);
}

/* ============================================
   TABLET
============================================ */

@media (max-width: 991.98px) {

    .contact-cta-section {
        padding: 5rem 0;
    }

    .contact-cta-wrapper {
        padding: 3rem 2.2rem;
        border-radius: 30px;
    }

    .contact-cta-content h2 {
        font-size: 2.5rem;
    }

    .contact-cta-info {
        gap: 1.3rem;
    }

    .contact-cta-divider {
        display: none;
    }

}

/* ============================================
   MOBILE
============================================ */

@media (max-width: 767.98px) {

    .contact-cta-section {
        padding: 4rem 0;
    }

    .contact-cta-wrapper {
        padding: 2.4rem 1.4rem;
        border-radius: 26px;
    }

    .contact-cta-content {
        margin-bottom: 2rem;
    }

    .contact-cta-content h2 {
        font-size: 2rem;
        line-height: 1.25;
    }

    .contact-cta-content p {
        font-size: 0.94rem;
        line-height: 1.8;
    }

    .contact-cta-actions {
        flex-direction: column;
        margin-bottom: 2.3rem;
    }

    .contact-cta-primary,
    .contact-cta-secondary {
        width: 100%;
        min-width: 100%;
    }

    .contact-cta-info {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }

    .contact-cta-info-item {
        width: 100%;
    }

}

</style>

@endsection
