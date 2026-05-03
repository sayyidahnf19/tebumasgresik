@extends('layouts.app')

@section('title', 'Kontak Kami - Tebu Mas Gresik')
@section('description', 'Hubungi Tebu Mas Gresik - Produsen Songkok Berkualitas. Kami siap membantu Anda dengan pertanyaan atau pesanan.')

@section('content')

<!-- ============================================-->
<!-- Hero Section - Creative & Modern -->
<!-- ============================================-->
<section style="padding-top: 8rem; padding-bottom: 6rem; background: linear-gradient(135deg, #D97060 0%, #C65650 50%, #A84A40 100%); position: relative; overflow: hidden;">
    <!-- Decorative Circles -->
    <div style="position: absolute; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255,255,255,0.15), transparent); border-radius: 50%; top: -100px; right: -100px;"></div>
    <div style="position: absolute; width: 300px; height: 300px; background: radial-gradient(circle, rgba(255,255,255,0.1), transparent); border-radius: 50%; bottom: 50px; left: -80px;"></div>
    
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <div style="display: inline-block; background: rgba(255,255,255,0.2); padding: 10px 24px; border-radius: 50px; margin-bottom: 24px; backdrop-filter: blur(10px);">
                <span style="color: rgba(255,255,255,0.9); font-weight: 600; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Mari Terhubung</span>
            </div>
            <h1 style="font-size: 3.5rem; font-weight: 900; color: white; margin-bottom: 20px; line-height: 1.1;">
                Kami Siap Mendengarkan Anda
            </h1>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.9); margin-bottom: 0; line-height: 1.8;">
                Punya pertanyaan? Tim kami yang ramah dan profesional siap membantu Anda kapan saja melalui berbagai saluran komunikasi.
            </p>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Contact Channels - Modern Grid -->
<!-- ============================================-->
<section style="padding: 0 0 4rem 0; background: white; position: relative; margin-top: -3rem;">
    <div class="container" style="position: relative; z-index: 5;">
        <!-- Floating Cards -->
        <div class="row g-4" style="margin-bottom: 4rem;">
            <!-- WhatsApp - Large Card -->
            <div class="col-lg-6 col-md-6">
                <div style="background: linear-gradient(135deg, rgba(217,112,96,0.1), rgba(198,86,80,0.05)); padding: 45px; border-radius: 20px; position: relative; overflow: hidden; height: 100%; min-height: 280px; display: flex; flex-direction: column; justify-content: space-between; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); border: 2px solid rgba(217,112,96,0.2);" onmouseover="this.style.transform='translateY(-16px)'; this.style.borderColor='rgba(217,112,96,0.5)'; this.style.boxShadow='0 24px 48px rgba(217,112,96,0.25)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(217,112,96,0.2)'; this.style.boxShadow='none'">
                    <!-- Decorative Corner -->
                    <div style="position: absolute; top: -60px; right: -60px; width: 180px; height: 180px; background: radial-gradient(circle, rgba(217,112,96,0.15), transparent); border-radius: 50%;"></div>
                    
                    <div>
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.2rem; margin-bottom: 24px;">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 style="font-size: 1.5rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">WhatsApp</h4>
                        <p style="font-size: 0.95rem; color: #666; margin-bottom: 24px; line-height: 1.7;">
                            Chat langsung dengan tim kami. Respon cepat dan solusi tepat untuk kebutuhan Anda.
                        </p>
                        <p style="font-size: 1.1rem; font-weight: 700; color: #D97060; margin-bottom: 24px;">+62 812-3456-7890</p>
                    </div>
                    <a href="https://wa.me/6281234567890" target="_blank" style="background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 14px 28px; border-radius: 12px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: inline-block; align-self: flex-start; border: none; cursor: pointer;" onmouseover="this.style.transform='scale(1.06)'; this.style.boxShadow='0 12px 28px rgba(217,112,96,0.4)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
                        Hubungi Sekarang <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
                    </a>
                </div>
            </div>

            <!-- Info Cards Grid 2x1 -->
            <div class="col-lg-6 col-md-6">
                <div class="row g-3" style="height: 100%;">
                    <!-- Email Card -->
                    <div class="col-12">
                        <div style="background: linear-gradient(135deg, rgba(198,86,80,0.1), rgba(168,74,64,0.05)); padding: 32px; border-radius: 16px; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); border: 2px solid rgba(198,86,80,0.2);" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(198,86,80,0.5)'; this.style.boxShadow='0 16px 32px rgba(198,86,80,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(198,86,80,0.2)'; this.style.boxShadow='none'">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <div>
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #C65650, #A84A40); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; margin-bottom: 16px;">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <h5 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Email</h5>
                                    <a href="mailto:info@tebumasgresik.com" style="color: #C65650; font-weight: 600; text-decoration: none; font-size: 0.95rem;">info@tebumasgresik.com</a>
                                </div>
                                <i class="fas fa-arrow-right" style="color: #C65650; opacity: 0.3; font-size: 1.2rem; margin-top: 8px;"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="col-12">
                        <div style="background: linear-gradient(135deg, rgba(168,74,64,0.1), rgba(139,61,51,0.05)); padding: 32px; border-radius: 16px; position: relative; overflow: hidden; transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); border: 2px solid rgba(168,74,64,0.2);" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(168,74,64,0.5)'; this.style.boxShadow='0 16px 32px rgba(168,74,64,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(168,74,64,0.2)'; this.style.boxShadow='none'">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                                <div>
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #A84A40, #8B3D33); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; margin-bottom: 16px;">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <h5 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Lokasi</h5>
                                    <p style="color: #666; font-size: 0.9rem; line-height: 1.5; margin: 0;">Jl. Sindujoyo 2 A No. 6, Kroman, Gresik</p>
                                </div>
                                <i class="fas fa-arrow-right" style="color: #A84A40; opacity: 0.3; font-size: 1.2rem; margin-top: 8px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Operating Hours & Contact Info - Minimal Card -->
        <div style="background: white; padding: 40px; border-radius: 18px; border: 1px solid #f0f0f0; box-shadow: 0 8px 24px rgba(0,0,0,0.04);">
            <div class="row g-4">
                <div class="col-md-4">
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(217,112,96,0.15), rgba(217,112,96,0.05)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #D97060; flex-shrink: 0;">
                            <i class="fas fa-clock" style="font-size: 1.3rem;"></i>
                        </div>
                        <div>
                            <h6 style="font-size: 0.85rem; font-weight: 700; color: #999; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Jam Operasional</h6>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem;">
                                <li style="color: #666; margin-bottom: 4px;"><strong style="color: #1a1a1a;">Senin-Jumat:</strong> 08:00-17:00</li>
                                <li style="color: #666;"><strong style="color: #1a1a1a;">Sabtu:</strong> 08:00-13:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(217,112,96,0.15), rgba(217,112,96,0.05)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #D97060; flex-shrink: 0;">
                            <i class="fas fa-phone" style="font-size: 1.3rem;"></i>
                        </div>
                        <div>
                            <h6 style="font-size: 0.85rem; font-weight: 700; color: #999; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Telepon</h6>
                            <a href="tel:+62-0343-746-1234" style="color: #D97060; text-decoration: none; font-weight: 700; font-size: 0.95rem;">+62 0343-746-1234</a>
                            <p style="font-size: 0.85rem; color: #999; margin-top: 4px; margin-bottom: 0;">Hubungi via WhatsApp untuk respon lebih cepat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(217,112,96,0.15), rgba(217,112,96,0.05)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #D97060; flex-shrink: 0;">
                            <i class="fas fa-star" style="font-size: 1.3rem;"></i>
                        </div>
                        <div>
                            <h6 style="font-size: 0.85rem; font-weight: 700; color: #999; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">Response Time</h6>
                            <p style="color: #1a1a1a; font-weight: 700; font-size: 0.95rem; margin: 0;">24 Jam</p>
                            <p style="font-size: 0.85rem; color: #999; margin-top: 4px; margin-bottom: 0;">Untuk setiap pesan Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Form & Google Maps - 2 Column Layout -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form Column -->
            <div class="col-lg-6">
                <div style="margin-bottom: 4rem;">
                    <h2 style="font-size: 2rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">Kirim Pesan</h2>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 0; line-height: 1.6;">Isi form di bawah dan kami akan menghubungi Anda dalam waktu 24 jam.</p>
                </div>

                <form method="POST" action="#" style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 12px 40px rgba(0,0,0,0.08); border: 1px solid #f0f0f0;">
                    <!-- Name Field -->
                    <div style="margin-bottom: 28px;">
                        <label style="display: block; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; font-size: 0.95rem;">Nama Lengkap</label>
                        <input type="text" placeholder="Siapa nama Anda?" required style="width: 100%; padding: 14px 16px; border: 2px solid #f0f0f0; border-radius: 12px; font-size: 0.95rem; transition: all 0.3s ease; box-sizing: border-box; background: #fafafa;" onmouseover="this.style.borderColor='#D97060'; this.style.background='white'" onfocus="this.style.borderColor='#D97060'; this.style.background='white'; this.style.boxShadow='0 0 0 4px rgba(217,112,96,0.1)'" onblur="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'; this.style.boxShadow='none'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'" />
                    </div>

                    <!-- Email Field -->
                    <div style="margin-bottom: 28px;">
                        <label style="display: block; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; font-size: 0.95rem;">Email</label>
                        <input type="email" placeholder="email@example.com" required style="width: 100%; padding: 14px 16px; border: 2px solid #f0f0f0; border-radius: 12px; font-size: 0.95rem; transition: all 0.3s ease; box-sizing: border-box; background: #fafafa;" onmouseover="this.style.borderColor='#D97060'; this.style.background='white'" onfocus="this.style.borderColor='#D97060'; this.style.background='white'; this.style.boxShadow='0 0 0 4px rgba(217,112,96,0.1)'" onblur="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'; this.style.boxShadow='none'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'" />
                    </div>

                    <!-- Phone Field -->
                    <div style="margin-bottom: 28px;">
                        <label style="display: block; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; font-size: 0.95rem;">WhatsApp / Telepon</label>
                        <input type="tel" placeholder="+62 812-XXXX-XXXX" required style="width: 100%; padding: 14px 16px; border: 2px solid #f0f0f0; border-radius: 12px; font-size: 0.95rem; transition: all 0.3s ease; box-sizing: border-box; background: #fafafa;" onmouseover="this.style.borderColor='#D97060'; this.style.background='white'" onfocus="this.style.borderColor='#D97060'; this.style.background='white'; this.style.boxShadow='0 0 0 4px rgba(217,112,96,0.1)'" onblur="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'; this.style.boxShadow='none'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'" />
                    </div>

                    <!-- Subject Field -->
                    <div style="margin-bottom: 28px;">
                        <label style="display: block; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; font-size: 0.95rem;">Subjek</label>
                        <select style="width: 100%; padding: 14px 16px; border: 2px solid #f0f0f0; border-radius: 12px; font-size: 0.95rem; transition: all 0.3s ease; box-sizing: border-box; background: #fafafa;" onmouseover="this.style.borderColor='#D97060'; this.style.background='white'" onfocus="this.style.borderColor='#D97060'; this.style.background='white'; this.style.boxShadow='0 0 0 4px rgba(217,112,96,0.1)'" onblur="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'; this.style.boxShadow='none'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'">
                            <option value="">-- Pilih Subjek --</option>
                            <option value="pesanan">Pertanyaan Pesanan</option>
                            <option value="harga">Pertanyaan Harga</option>
                            <option value="garansi">Pertanyaan Garansi</option>
                            <option value="keluhan">Keluhan / Komplain</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <!-- Message Field -->
                    <div style="margin-bottom: 32px;">
                        <label style="display: block; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; font-size: 0.95rem;">Pesan Anda</label>
                        <textarea placeholder="Tulis pesan Anda di sini..." rows="5" required style="width: 100%; padding: 14px 16px; border: 2px solid #f0f0f0; border-radius: 12px; font-size: 0.95rem; transition: all 0.3s ease; box-sizing: border-box; font-family: inherit; resize: vertical; background: #fafafa;" onmouseover="this.style.borderColor='#D97060'; this.style.background='white'" onfocus="this.style.borderColor='#D97060'; this.style.background='white'; this.style.boxShadow='0 0 0 4px rgba(217,112,96,0.1)'" onblur="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'; this.style.boxShadow='none'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.background='#fafafa'"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" style="background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 16px 40px; border: none; border-radius: 12px; font-size: 1rem; font-weight: 700; cursor: pointer; transition: all 0.3s ease; width: 100%; text-transform: uppercase; letter-spacing: 1.2px;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.35)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Kirim Pesan
                    </button>

                    <p style="font-size: 0.85rem; color: #999; margin-top: 16px; text-align: center; margin-bottom: 0;">
                        Kami akan membalas Anda dalam 24 jam kerja
                    </p>
                </form>
            </div>

            <!-- Maps & Info Column -->
            <div class="col-lg-6">
                <div style="margin-bottom: 4rem;">
                    <h2 style="font-size: 2rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">Kunjungi Kami</h2>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 0; line-height: 1.6;">Lokasi kantor kami di Gresik, Jawa Timur. Kami menunggu kunjungan Anda.</p>
                </div>

                <!-- Maps Container -->
                <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 12px 40px rgba(0,0,0,0.1); height: 350px; margin-bottom: 32px; border: 1px solid #f0f0f0;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8226545308803!2d112.64779!3d-7.16437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80d4c4c4c4c4d%3A0x1234567890abcdef!2sJl.%20Sindujoyo%202%20A%20No.%206%2C%20Kroman%2C%20Gresik!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="100%" style="border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Info Grid -->
                <div class="row g-3">
                    <!-- Address Card -->
                    <div class="col-12">
                        <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid #f0f0f0; display: flex; gap: 16px; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 28px rgba(0,0,0,0.08)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(217,112,96,0.15), rgba(217,112,96,0.05)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #D97060; flex-shrink: 0;">
                                <i class="fas fa-map-pin" style="font-size: 1.5rem;"></i>
                            </div>
                            <div>
                                <h6 style="font-size: 0.9rem; font-weight: 700; color: #999; margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.5px;">Alamat</h6>
                                <p style="color: #1a1a1a; font-weight: 600; font-size: 0.95rem; margin: 0; line-height: 1.5;">Jl. Sindujoyo 2 A No. 6, Kroman, Gresik, Jawa Timur</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hours Card -->
                    <div class="col-12">
                        <div style="background: white; padding: 24px; border-radius: 16px; border: 1px solid #f0f0f0; display: flex; gap: 16px; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 28px rgba(0,0,0,0.08)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, rgba(217,112,96,0.15), rgba(217,112,96,0.05)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #D97060; flex-shrink: 0;">
                                <i class="fas fa-clock" style="font-size: 1.5rem;"></i>
                            </div>
                            <div>
                                <h6 style="font-size: 0.9rem; font-weight: 700; color: #999; margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.5px;">Jam Buka</h6>
                                <p style="color: #1a1a1a; font-weight: 600; font-size: 0.9rem; margin: 0;">Senin-Jumat: 08:00 - 17:00</p>
                                <p style="color: #1a1a1a; font-weight: 600; font-size: 0.9rem; margin: 4px 0 0 0;">Sabtu: 08:00 - 13:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Maps Button -->
                    <div class="col-12">
                        <a href="https://maps.google.com/?q=Jl.+Sindujoyo+2+A+No.+6+Kroman+Gresik" target="_blank" style="background: white; border: 2px solid #D97060; color: #D97060; padding: 14px; border-radius: 12px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: block; text-align: center;" onmouseover="this.style.background='#D97060'; this.style.color='white'; this.style.boxShadow='0 12px 28px rgba(217,112,96,0.3)'" onmouseout="this.style.background='white'; this.style.color='#D97060'; this.style.boxShadow='none'">
                            <i class="fas fa-navigation" style="margin-right: 8px;"></i> Buka di Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- FAQ Section - Modern Accordion -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto 4rem;">
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #1a1a1a; margin-bottom: 16px; text-align: center;">Pertanyaan yang Sering Diajukan</h2>
            <p style="text-align: center; color: #666; font-size: 0.95rem; line-height: 1.6;">Tidak menemukan jawaban? Hubungi kami melalui kontak di atas dan tim kami siap membantu.</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <!-- FAQ Item 1 -->
            <div style="margin-bottom: 16px;">
                <button style="width: 100%; background: white; padding: 24px; border-radius: 14px; border: 2px solid #f0f0f0; text-align: left; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.15)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)'" onclick="const answer = this.nextElementSibling; const icon = this.querySelector('.faq-icon'); if(answer.style.display === 'none') { answer.style.display = 'block'; icon.style.transform = 'rotate(45deg)'; } else { answer.style.display = 'none'; icon.style.transform = 'rotate(0)'; }">
                    <h5 style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0;">Berapa lama proses pengiriman?</h5>
                    <span class="faq-icon" style="font-size: 1.4rem; color: #D97060; transition: all 0.3s ease; transform: rotate(0);">+</span>
                </button>
                <div style="display: none; background: #f8f9fa; padding: 20px 24px; border-radius: 0 0 14px 14px; border-top: 2px solid #f0f0f0; margin-top: -2px;">
                    <p style="color: #666; line-height: 1.7; margin: 0;">
                        Pengiriman biasanya memakan waktu 3-7 hari kerja tergantung lokasi Anda. Untuk pesanan dalam kota Gresik, kami menawarkan pengiriman same-day dengan biaya terjangkau.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div style="margin-bottom: 16px;">
                <button style="width: 100%; background: white; padding: 24px; border-radius: 14px; border: 2px solid #f0f0f0; text-align: left; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.15)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)'" onclick="const answer = this.nextElementSibling; const icon = this.querySelector('.faq-icon'); if(answer.style.display === 'none') { answer.style.display = 'block'; icon.style.transform = 'rotate(45deg)'; } else { answer.style.display = 'none'; icon.style.transform = 'rotate(0)'; }">
                    <h5 style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0;">Apakah ada garansi untuk produk?</h5>
                    <span class="faq-icon" style="font-size: 1.4rem; color: #D97060; transition: all 0.3s ease; transform: rotate(0);">+</span>
                </button>
                <div style="display: none; background: #f8f9fa; padding: 20px 24px; border-radius: 0 0 14px 14px; border-top: 2px solid #f0f0f0; margin-top: -2px;">
                    <p style="color: #666; line-height: 1.7; margin: 0;">
                        Ya, semua produk Tebu Mas dilengkapi dengan garansi 1 tahun untuk cacat produksi. Untuk klaim garansi, hubungi customer service kami dengan bukti pembelian dan foto produk yang bermasalah.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div style="margin-bottom: 16px;">
                <button style="width: 100%; background: white; padding: 24px; border-radius: 14px; border: 2px solid #f0f0f0; text-align: left; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.15)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)'" onclick="const answer = this.nextElementSibling; const icon = this.querySelector('.faq-icon'); if(answer.style.display === 'none') { answer.style.display = 'block'; icon.style.transform = 'rotate(45deg)'; } else { answer.style.display = 'none'; icon.style.transform = 'rotate(0)'; }">
                    <h5 style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0;">Bagaimana cara merawat songkok?</h5>
                    <span class="faq-icon" style="font-size: 1.4rem; color: #D97060; transition: all 0.3s ease; transform: rotate(0);">+</span>
                </button>
                <div style="display: none; background: #f8f9fa; padding: 20px 24px; border-radius: 0 0 14px 14px; border-top: 2px solid #f0f0f0; margin-top: -2px;">
                    <p style="color: #666; line-height: 1.7; margin: 0;">
                        Cuci dengan air dingin, jangan diperas terlalu kuat. Keringkan di tempat yang teduh, jangan di bawah sinar matahari langsung. Simpan di tempat yang kering dan hindari penyimpanan lembab untuk menjaga kualitas dan warna songkok.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div style="margin-bottom: 16px;">
                <button style="width: 100%; background: white; padding: 24px; border-radius: 14px; border: 2px solid #f0f0f0; text-align: left; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 8px 24px rgba(217,112,96,0.15)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.05)'" onclick="const answer = this.nextElementSibling; const icon = this.querySelector('.faq-icon'); if(answer.style.display === 'none') { answer.style.display = 'block'; icon.style.transform = 'rotate(45deg)'; } else { answer.style.display = 'none'; icon.style.transform = 'rotate(0)'; }">
                    <h5 style="font-size: 1.05rem; font-weight: 700; color: #1a1a1a; margin: 0;">Apakah tersedia pesanan custom atau grosir?</h5>
                    <span class="faq-icon" style="font-size: 1.4rem; color: #D97060; transition: all 0.3s ease; transform: rotate(0);">+</span>
                </button>
                <div style="display: none; background: #f8f9fa; padding: 20px 24px; border-radius: 0 0 14px 14px; border-top: 2px solid #f0f0f0; margin-top: -2px;">
                    <p style="color: #666; line-height: 1.7; margin: 0;">
                        Tentu! Kami melayani pesanan custom dengan desain sesuai keinginan dan grosir dengan harga khusus untuk pembelian dalam jumlah besar. Hubungi tim sales kami untuk diskusi lebih lanjut mengenai spesifikasi dan kuantitas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- CTA Section - Final Call to Action -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #D97060 0%, #C65650 50%, #A84A40 100%); position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; width: 350px; height: 350px; background: radial-gradient(circle, rgba(255,255,255,0.1), transparent); border-radius: 50%; top: -100px; right: -50px;"></div>
    <div style="position: absolute; width: 250px; height: 250px; background: radial-gradient(circle, rgba(255,255,255,0.08), transparent); border-radius: 50%; bottom: -80px; left: -80px;"></div>

    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: white; margin-bottom: 20px; line-height: 1.2;">
                Siap Berkerjasama dengan Kami?
            </h2>
            <p style="font-size: 1.05rem; color: rgba(255,255,255,0.9); margin-bottom: 40px; line-height: 1.8;">
                Hubungi tim kami hari ini dan dapatkan konsultasi gratis untuk kebutuhan Anda.
            </p>
            
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/6281234567890" target="_blank" style="background: white; color: #D97060; padding: 16px 40px; border-radius: 12px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: inline-block; border: 2px solid white;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 16px 40px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
                    <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat WhatsApp
                </a>
                <a href="mailto:info@tebumasgresik.com" style="background: transparent; color: white; padding: 16px 40px; border-radius: 12px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: inline-block; border: 2px solid white;" onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='scale(1.05)'" onmouseout="this.style.background='transparent'; this.style.transform='scale(1)'">
                    <i class="fas fa-envelope" style="margin-right: 8px;"></i> Kirim Email
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
