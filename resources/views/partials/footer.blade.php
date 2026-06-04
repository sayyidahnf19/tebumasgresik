<footer class="footer-section">
    <div class="footer-glow footer-glow--top"></div>
    <div class="footer-glow footer-glow--bottom"></div>

    <div class="container footer-shell">
        <div class="footer-main">
            <div class="row g-4 g-lg-5 align-items-start">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <img src="{{ asset('img/LogoTM.png') }}" alt="Tebu Mas Gresik" class="footer-logo" />
                        <span class="footer-accent"></span>
                    </div>
                    <p class="footer-copy">
                        Sejak 1993, kami menghadirkan songkok berkualitas premium untuk menjadi bagian dari momen spesial Anda. Dengan fokus pada kualitas, kenyamanan, dan rasa percaya, kami siap menjadi mitra pilihan Anda.
                    </p>

                    <div class="footer-social">
                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.whatsapp.com" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.youtube.com" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Navigasi</h5>
                    <ul class="footer-list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('products') }}">Koleksi Produk</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="#booking">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Koleksi</h5>
                    <ul class="footer-list">
                        <li><a href="{{ route('products') }}">Songkok Non AC</a></li>
                        <li><a href="{{ route('products') }}">Songkok AC</a></li>
                        <li><a href="{{ route('products') }}">Songkok Full AC</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Hubungi Kami</h5>
                    <div class="footer-card">
                        <p class="footer-label">WhatsApp</p>
                        <a class="footer-contact" href="https://wa.me/6287702885164" target="_blank">+62 877-0288-5164</a>
                    </div>
                    <div class="footer-card">
                        <p class="footer-label">Email</p>
                        <a class="footer-contact" href="mailto:info@tebumasgresik.com">info@tebumasgresik.com</a>
                    </div>
                    <div class="footer-card">
                        <p class="footer-label">Lokasi</p>
                        <p class="footer-address">Jl. Sindujoyo 2 A No. 6, Kroman, Gresik</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom">
            <div>
                <p class="footer-copyright">© 2024 Tebu Mas Gresik</p>
                <p class="footer-subcopy">Kualitas Premium Sejak 1993</p>
            </div>
            <div class="footer-bottom-links">
                <a href="#!">Kebijakan Privasi</a>
                <a href="#!">Syarat &amp; Ketentuan</a>
                <a href="#!">Kebijakan Pengembalian</a>
            </div>
        </div>
    </div>
</footer>
