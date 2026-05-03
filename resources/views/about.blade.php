@extends('layouts.app')

@section('title', 'Tentang Kami - Tebu Mas Gresik')
@section('description', 'Mengenal Tebu Mas Gresik - Produsen Songkok Berkualitas Tinggi dengan Pengalaman 30+ Tahun')

@section('content')

<!-- ============================================-->
<!-- Hero Section - Modern Gradient -->
<!-- ============================================-->
<section style="padding-top: 8rem; padding-bottom: 6rem; background: linear-gradient(135deg, #D97060 0%, #C65650 50%, #A84A40 100%); position: relative; overflow: hidden; margin-top: 60px;">
    <!-- Decorative Shapes -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%); border-radius: 50%; z-index: 1;"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%); border-radius: 50%; z-index: 1;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center g-5">
            <!-- Left Content -->
            <div class="col-lg-6">
                <div style="background: rgba(255,255,255,0.95); padding: 45px; border-radius: 20px; box-shadow: 0 30px 80px rgba(0,0,0,0.15); backdrop-filter: blur(10px);">
                    <p style="font-size: 0.9rem; color: #D97060; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">🏆 Tentang Kami</p>
                    <h1 style="font-size: 2.8rem; font-weight: 900; color: #1a1a1a; margin-bottom: 24px; line-height: 1.2;">
                        Tebu Mas Gresik
                    </h1>
                    <p style="font-size: 1rem; color: #666; line-height: 1.9; margin-bottom: 28px; font-weight: 500;">
                        Sejak <span style="font-weight: 800; color: #D97060;">1993</span>, kami telah menjadi produsen songkok terpercaya di Indonesia. Dengan dedikasi penuh terhadap kualitas dan inovasi, Tebu Mas Gresik menjadi pilihan utama bagi pelanggan yang menghargai kualitas premium.
                    </p>
                    
                    <!-- Stats Grid -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 36px;">
                        <div style="text-align: center; padding: 20px; background: linear-gradient(135deg, #D97060, #C65650); color: white; border-radius: 14px; box-shadow: 0 8px 20px rgba(217,112,96,0.3);">
                            <h3 style="font-size: 2.2rem; font-weight: 900; margin: 0;">30+</h3>
                            <p style="font-size: 0.85rem; margin: 8px 0 0 0; font-weight: 600;">Tahun</p>
                        </div>
                        <div style="text-align: center; padding: 20px; background: linear-gradient(135deg, #C65650, #A84A40); color: white; border-radius: 14px; box-shadow: 0 8px 20px rgba(217,112,96,0.3);">
                            <h3 style="font-size: 2.2rem; font-weight: 900; margin: 0;">10K+</h3>
                            <p style="font-size: 0.85rem; margin: 8px 0 0 0; font-weight: 600;">Terjual</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Images Grid -->
            <div class="col-lg-6">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; grid-auto-rows: auto;">
                    <!-- Large Image Top Left -->
                    <div style="grid-column: 1 / -1; position: relative; overflow: hidden; border-radius: 18px; box-shadow: 0 25px 60px rgba(0,0,0,0.2); height: 280px;">
                        <img src="{{ asset('img/category/nonac.png') }}" alt="Songkok Non AC" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;" />
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, transparent 0%, rgba(217,112,96,0.3) 100%);"></div>
                    </div>
                    
                    <!-- Bottom Right Images -->
                    <div style="position: relative; overflow: hidden; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.15); height: 150px;">
                        <img src="{{ asset('img/category/ac.png') }}" alt="Songkok AC" style="width: 100%; height: 100%; object-fit: cover;" />
                    </div>
                    <div style="position: relative; overflow: hidden; border-radius: 16px; box-shadow: 0 15px 40px rgba(0,0,0,0.15); height: 150px;">
                        <img src="{{ asset('img/category/fullac.png') }}" alt="Songkok Full AC" style="width: 100%; height: 100%; object-fit: cover;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Mission & Vision Section - Modern Cards -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: white; position: relative; overflow: hidden;">
    <!-- Background Decoration -->
    <div style="position: absolute; top: 0; right: 0; width: 500px; height: 500px; background: radial-gradient(circle, rgba(217,112,96,0.05) 0%, transparent 70%); border-radius: 50%; z-index: 0; opacity: 0.6;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <div class="text-center mb-5">
            <p style="font-size: 0.9rem; color: #D97060; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">💡 Komitmen Kami</p>
            <h2 style="font-size: 2.6rem; font-weight: 900; color: #1a1a1a; margin-bottom: 20px;">Misi & Visi</h2>
            <div style="width: 80px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin: 0 auto;"></div>
        </div>

        <div class="row g-4" style="margin-top: 50px;">
            <!-- Mission Card -->
            <div class="col-lg-6">
                <div style="position: relative; overflow: hidden; border-radius: 20px; background: white; border: 2px solid #f0f0f0; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer; padding: 50px; min-height: 400px; display: flex; flex-direction: column; justify-content: space-between;" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 25px 60px rgba(217,112,96,0.15)'; this.style.transform='translateY(-8px)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                    <!-- Background Accent -->
                    <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 50%; opacity: 0.08; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; margin-bottom: 28px; box-shadow: 0 15px 40px rgba(217,112,96,0.2);">
                            🎯
                        </div>
                        <h3 style="font-size: 1.8rem; font-weight: 900; color: #1a1a1a; margin-bottom: 20px; line-height: 1.3;">Misi Kami</h3>
                        <p style="font-size: 1rem; color: #666; line-height: 2; margin: 0; font-weight: 500;">
                            Menyediakan songkok berkualitas premium dengan standar internasional, menggunakan bahan pilihan terbaik dan keterampilan jahit yang teliti. Kami berkomitmen memberikan produk yang tahan lama, nyaman, dan membanggakan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-lg-6">
                <div style="position: relative; overflow: hidden; border-radius: 20px; background: linear-gradient(135deg, #D97060, #C65650); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer; padding: 50px; min-height: 400px; display: flex; flex-direction: column; justify-content: space-between; color: white; box-shadow: 0 20px 60px rgba(217,112,96,0.2);" onmouseover="this.style.boxShadow='0 30px 80px rgba(217,112,96,0.3)'; this.style.transform='translateY(-8px)'" onmouseout="this.style.boxShadow='0 20px 60px rgba(217,112,96,0.2)'; this.style.transform='translateY(0)'">
                    <!-- Background Accent -->
                    <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: 0;"></div>
                    
                    <div style="position: relative; z-index: 1;">
                        <div style="width: 70px; height: 70px; background: rgba(255,255,255,0.2); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; margin-bottom: 28px;">
                            🌟
                        </div>
                        <h3 style="font-size: 1.8rem; font-weight: 900; color: white; margin-bottom: 20px; line-height: 1.3;">Visi Kami</h3>
                        <p style="font-size: 1rem; color: rgba(255,255,255,0.95); line-height: 2; margin: 0; font-weight: 500;">
                            Menjadi produsen songkok terdepan di Asia Tenggara yang dikenal karena inovasi, kualitas, dan pelayanan terbaik. Kami ingin setiap orang yang mengenakan songkok Tebu Mas merasa percaya diri dan nyaman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Core Values Section -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #f8f9fa 0%, #eeeeee 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: #1a1a1a; margin-bottom: 20px;">Nilai-Nilai Inti Kami</h2>
            <div style="width: 80px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin: 0 auto;"></div>
        </div>

        <div class="row g-4">
            <!-- Value 1 -->
            <div class="col-lg-3 col-md-6">
                <div style="background: white; padding: 32px; border-radius: 16px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.05); transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.05)'">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.5rem; margin: 0 auto 20px;">
                        💎
                    </div>
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">Kualitas</h4>
                    <p style="font-size: 0.95rem; color: #666; line-height: 1.6; margin: 0;">
                        Setiap produk melalui quality control ketat untuk memastikan standar tertinggi
                    </p>
                </div>
            </div>

            <!-- Value 2 -->
            <div class="col-lg-3 col-md-6">
                <div style="background: white; padding: 32px; border-radius: 16px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.05); transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.05)'">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.5rem; margin: 0 auto 20px;">
                        🤝
                    </div>
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">Integritas</h4>
                    <p style="font-size: 0.95rem; color: #666; line-height: 1.6; margin: 0;">
                        Jujur, transparan, dan bertanggung jawab dalam setiap transaksi bisnis
                    </p>
                </div>
            </div>

            <!-- Value 3 -->
            <div class="col-lg-3 col-md-6">
                <div style="background: white; padding: 32px; border-radius: 16px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.05); transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.05)'">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.5rem; margin: 0 auto 20px;">
                        💡
                    </div>
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">Inovasi</h4>
                    <p style="font-size: 0.95rem; color: #666; line-height: 1.6; margin: 0;">
                        Terus berinovasi untuk menghadirkan produk dan layanan yang lebih baik
                    </p>
                </div>
            </div>

            <!-- Value 4 -->
            <div class="col-lg-3 col-md-6">
                <div style="background: white; padding: 32px; border-radius: 16px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.05); transition: all 0.4s ease; height: 100%;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 16px 40px rgba(217,112,96,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0,0,0,0.05)'">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 16px; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.5rem; margin: 0 auto 20px;">
                        😊
                    </div>
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #1a1a1a; margin-bottom: 12px;">Kepuasan Pelanggan</h4>
                    <p style="font-size: 0.95rem; color: #666; line-height: 1.6; margin: 0;">
                        Kepuasan pelanggan adalah prioritas utama kami dalam setiap layanan
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Why Choose Us Section -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: #1a1a1a; margin-bottom: 20px;">Mengapa Memilih Tebu Mas?</h2>
            <div style="width: 80px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin: 0 auto;"></div>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div style="position: relative;">
                    <img src="{{ asset('img/dest/Elegan.png') }}" alt="Produk Elegan" style="width: 100%; border-radius: 16px; box-shadow: 0 20px 60px rgba(217,112,96,0.15);" />
                </div>
            </div>

            <div class="col-lg-6">
                <div style="display: flex; flex-direction: column; gap: 24px;">
                    <!-- Benefit 1 -->
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; flex-shrink: 0;">
                            ✓
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Bahan Berkualitas Premium</h4>
                            <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Kami menggunakan bahan pilihan terbaik yang nyaman, tahan lama, dan cocok untuk iklim tropis Indonesia</p>
                        </div>
                    </div>

                    <!-- Benefit 2 -->
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; flex-shrink: 0;">
                            ✓
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Jahitan Rapi & Presisi</h4>
                            <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Setiap jahitan dikerjakan dengan teliti oleh pengrajin berpengalaman kami</p>
                        </div>
                    </div>

                    <!-- Benefit 3 -->
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; flex-shrink: 0;">
                            ✓
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Harga Kompetitif</h4>
                            <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Kualitas premium dengan harga yang terjangkau untuk semua kalangan</p>
                        </div>
                    </div>

                    <!-- Benefit 4 -->
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; flex-shrink: 0;">
                            ✓
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Pengiriman Cepat</h4>
                            <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Proses pemesanan yang mudah dengan pengiriman ke seluruh Indonesia</p>
                        </div>
                    </div>

                    <!-- Benefit 5 -->
                    <div style="display: flex; gap: 16px;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #D97060, #C65650); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; flex-shrink: 0;">
                            ✓
                        </div>
                        <div>
                            <h4 style="font-size: 1.1rem; font-weight: 800; color: #1a1a1a; margin-bottom: 8px;">Garansi & Layanan Purna Jual</h4>
                            <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Kami siap memberikan garansi dan layanan purna jual terbaik untuk kepuasan Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Timeline/History Section -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #f8f9fa 0%, #eeeeee 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; font-weight: 800; color: #1a1a1a; margin-bottom: 20px;">Perjalanan Kami</h2>
            <div style="width: 80px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin: 0 auto;"></div>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Timeline Item 1 -->
            <div style="display: flex; gap: 24px; margin-bottom: 48px; position: relative;">
                <div style="text-align: right; width: 150px; flex-shrink: 0;">
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #D97060; margin: 0;">1993</h4>
                    <p style="font-size: 0.9rem; color: #666; margin: 8px 0 0 0;">Awal Berdiri</p>
                </div>
                <div style="width: 40px; display: flex; align-items: flex-start; justify-content: center; flex-shrink: 0;">
                    <div style="width: 16px; height: 16px; background: #D97060; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 3px #D97060;"></div>
                </div>
                <div style="flex: 1; padding: 24px; background: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 8px 0;">Tebu Mas Gresik Didirikan</h5>
                    <p style="font-size: 0.9rem; color: #666; margin: 0; line-height: 1.6;">Memulai perjalanan sebagai produsen songkok dengan komitmen tinggi terhadap kualitas</p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div style="display: flex; gap: 24px; margin-bottom: 48px;">
                <div style="text-align: right; width: 150px; flex-shrink: 0;">
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #D97060; margin: 0;">2005</h4>
                    <p style="font-size: 0.9rem; color: #666; margin: 8px 0 0 0;">Ekspansi</p>
                </div>
                <div style="width: 40px; display: flex; align-items: flex-start; justify-content: center; flex-shrink: 0;">
                    <div style="width: 16px; height: 16px; background: #D97060; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 3px #D97060;"></div>
                </div>
                <div style="flex: 1; padding: 24px; background: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 8px 0;">Ekspansi Produksi</h5>
                    <p style="font-size: 0.9rem; color: #666; margin: 0; line-height: 1.6;">Meningkatkan kapasitas produksi dan memperluas jangkauan pasar ke seluruh Indonesia</p>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div style="display: flex; gap: 24px; margin-bottom: 48px;">
                <div style="text-align: right; width: 150px; flex-shrink: 0;">
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #D97060; margin: 0;">2015</h4>
                    <p style="font-size: 0.9rem; color: #666; margin: 8px 0 0 0;">Inovasi</p>
                </div>
                <div style="width: 40px; display: flex; align-items: flex-start; justify-content: center; flex-shrink: 0;">
                    <div style="width: 16px; height: 16px; background: #D97060; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 3px #D97060;"></div>
                </div>
                <div style="flex: 1; padding: 24px; background: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 8px 0;">Inovasi Produk AC</h5>
                    <p style="font-size: 0.9rem; color: #666; margin: 0; line-height: 1.6;">Meluncurkan inovasi songkok dengan ventilasi AC untuk kenyamanan maksimal</p>
                </div>
            </div>

            <!-- Timeline Item 4 -->
            <div style="display: flex; gap: 24px;">
                <div style="text-align: right; width: 150px; flex-shrink: 0;">
                    <h4 style="font-size: 1.3rem; font-weight: 800; color: #D97060; margin: 0;">2023</h4>
                    <p style="font-size: 0.9rem; color: #666; margin: 8px 0 0 0;">Digital</p>
                </div>
                <div style="width: 40px; display: flex; align-items: flex-start; justify-content: center; flex-shrink: 0;">
                    <div style="width: 16px; height: 16px; background: #D97060; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 3px #D97060;"></div>
                </div>
                <div style="flex: 1; padding: 24px; background: white; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <h5 style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin: 0 0 8px 0;">Platform Digital</h5>
                    <p style="font-size: 0.9rem; color: #666; margin: 0; line-height: 1.6;">Meluncurkan platform online untuk memudahkan pelanggan berbelanja songkok berkualitas</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- Product Categories Showcase -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #f8f9fa 0%, #eeeeee 100%); position: relative; overflow: hidden;">
    <!-- Decorative Background -->
    <div style="position: absolute; bottom: 0; left: 0; width: 300px; height: 300px; background: radial-gradient(circle, rgba(217,112,96,0.08) 0%, transparent 70%); border-radius: 50%; z-index: 0;"></div>
    <div style="position: absolute; top: 100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(217,112,96,0.06) 0%, transparent 70%); border-radius: 50%; z-index: 0;"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
        <div class="text-center mb-5">
            <p style="font-size: 0.9rem; color: #D97060; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">🛍️ Koleksi Kami</p>
            <h2 style="font-size: 2.6rem; font-weight: 900; color: #1a1a1a; margin-bottom: 20px;">Produk Unggulan</h2>
            <div style="width: 80px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin: 0 auto;"></div>
        </div>

        <div class="row g-4" style="margin-top: 50px;">
            <!-- Songkok Non AC -->
            <div class="col-lg-4 col-md-6">
                <div style="background: white; border-radius: 18px; overflow: hidden; box-shadow: 0 12px 36px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-12px)'; this.style.boxShadow='0 24px 60px rgba(217,112,96,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 36px rgba(0,0,0,0.08)'">
                    <div style="height: 260px; background: linear-gradient(135deg, #f5f5f5, #eeeeee); display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
                        <img src="{{ asset('img/category/nonac.png') }}" alt="Songkok Non AC" style="width: 90%; height: 90%; object-fit: contain; transition: transform 0.6s ease;" />
                    </div>
                    <div style="padding: 28px; display: flex; flex-direction: column; flex: 1;">
                        <div style="width: 70px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin-bottom: 16px; border-radius: 2px;"></div>
                        <h4 style="font-size: 1.3rem; font-weight: 900; color: #1a1a1a; margin: 0 0 12px 0;">Songkok Non AC</h4>
                        <p style="font-size: 0.95rem; color: #666; line-height: 1.7; margin: 0 0 24px 0; flex: 1;">Desain solid dan elegan dengan jahitan rapi sempurna untuk tampilan formal yang memukau.</p>
                        <a href="{{ route('products') }}" style="background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 12px 20px; border-radius: 10px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: inline-block; text-align: center; box-shadow: 0 8px 20px rgba(217,112,96,0.2);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 30px rgba(217,112,96,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.2)'">
                            Lihat Produk →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Songkok AC -->
            <div class="col-lg-4 col-md-6">
                <div style="background: white; border-radius: 18px; overflow: hidden; box-shadow: 0 12px 36px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-12px)'; this.style.boxShadow='0 24px 60px rgba(217,112,96,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 36px rgba(0,0,0,0.08)'">
                    <div style="height: 260px; background: linear-gradient(135deg, #f5f5f5, #eeeeee); display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
                        <img src="{{ asset('img/category/ac.png') }}" alt="Songkok AC" style="width: 90%; height: 90%; object-fit: contain; transition: transform 0.6s ease;" />
                    </div>
                    <div style="padding: 28px; display: flex; flex-direction: column; flex: 1;">
                        <div style="width: 70px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin-bottom: 16px; border-radius: 2px;"></div>
                        <h4 style="font-size: 1.3rem; font-weight: 900; color: #1a1a1a; margin: 0 0 12px 0;">Songkok AC</h4>
                        <p style="font-size: 0.95rem; color: #666; line-height: 1.7; margin: 0 0 24px 0; flex: 1;">Dilengkapi ventilasi standar untuk sirkulasi udara yang lebih nyaman sepanjang hari.</p>
                        <a href="{{ route('products') }}" style="background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 12px 20px; border-radius: 10px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: inline-block; text-align: center; box-shadow: 0 8px 20px rgba(217,112,96,0.2);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 30px rgba(217,112,96,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.2)'">
                            Lihat Produk →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Songkok Full AC -->
            <div class="col-lg-4 col-md-6">
                <div style="background: white; border-radius: 18px; overflow: hidden; box-shadow: 0 12px 36px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); height: 100%; display: flex; flex-direction: column;" onmouseover="this.style.transform='translateY(-12px)'; this.style.boxShadow='0 24px 60px rgba(217,112,96,0.2)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 36px rgba(0,0,0,0.08)'">
                    <div style="height: 260px; background: linear-gradient(135deg, #f5f5f5, #eeeeee); display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
                        <img src="{{ asset('img/category/fullac.png') }}" alt="Songkok Full AC" style="width: 90%; height: 90%; object-fit: contain; transition: transform 0.6s ease;" />
                    </div>
                    <div style="padding: 28px; display: flex; flex-direction: column; flex: 1;">
                        <div style="width: 70px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin-bottom: 16px; border-radius: 2px;"></div>
                        <h4 style="font-size: 1.3rem; font-weight: 900; color: #1a1a1a; margin: 0 0 12px 0;">Songkok Full AC</h4>
                        <p style="font-size: 0.95rem; color: #666; line-height: 1.7; margin: 0 0 24px 0; flex: 1;">Teknologi full jaring untuk ventilasi maksimal dan kenyamanan premium saat dipakai.</p>
                        <a href="{{ route('products') }}" style="background: linear-gradient(135deg, #D97060, #C65650); color: white; padding: 12px 20px; border-radius: 10px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; display: inline-block; text-align: center; box-shadow: 0 8px 20px rgba(217,112,96,0.2);" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 30px rgba(217,112,96,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.2)'">
                            Lihat Produk →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- CTA Section - Final -->
<!-- ============================================-->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #D97060 0%, #C65650 50%, #A84A40 100%); position: relative; overflow: hidden;">
    <!-- Decorative Shapes -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%); border-radius: 50%; z-index: 1;"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%); border-radius: 50%; z-index: 1;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="text-center">
            <h2 style="font-size: 2.8rem; font-weight: 900; color: white; margin-bottom: 24px; line-height: 1.3;">Siap Memesan Songkok Berkualitas?</h2>
            <p style="font-size: 1.1rem; color: rgba(255,255,255,0.95); margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.9; font-weight: 500;">
                Jangan lewatkan kesempatan untuk memiliki songkok premium dari Tebu Mas. Pesan sekarang dan nikmati kualitas terbaik dengan harga terjangkau ke seluruh Indonesia.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('products') }}" style="background: white; color: #D97060; padding: 16px 36px; border-radius: 12px; text-decoration: none; font-weight: 800; transition: all 0.3s ease; display: inline-block; font-size: 1rem; box-shadow: 0 12px 30px rgba(0,0,0,0.2);" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 16px 40px rgba(0,0,0,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 12px 30px rgba(0,0,0,0.2)'">
                    Lihat Katalog Produk
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" style="background: transparent; color: white; padding: 16px 36px; border-radius: 12px; text-decoration: none; font-weight: 800; border: 2.5px solid white; transition: all 0.3s ease; display: inline-block; font-size: 1rem;" onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.transform='translateY(-3px)'" onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)'">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
