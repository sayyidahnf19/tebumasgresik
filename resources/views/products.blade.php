@extends('layouts.app')

@section('title', 'Produk Songkok - Tebu Mas Gresik')

@section('content')

<!-- ============================================-->
<!-- <section> Products Hero ============================-->
<section class="products-hero" style="padding: 28px 0 18px; margin-top: 8px; background:
    radial-gradient(circle at top right, rgba(217,112,96,0.08), transparent 18%),
    linear-gradient(135deg, #fffaf8 0%, #ffffff 55%, #fff7f4 100%);">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-12 col-lg-7 text-center text-lg-start">
                <span style="display:inline-flex; align-items:center; gap:8px; padding:8px 12px; border-radius:999px; background:rgba(217,112,96,0.10); color:#c65650; font-size:0.82rem; font-weight:800; letter-spacing:0.14em; text-transform:uppercase; box-shadow:0 8px 18px rgba(217,112,96,0.12);">Koleksi Premium</span>
                <h1 class="fw-bold mt-3 mb-3" style="font-size:clamp(1.8rem, 4.5vw, 2.6rem); color:#171717; line-height:1.15;">Songkok Premium yang Rapi, Nyaman, dan Mudah Dipilih</h1>
                <p style="font-size:0.98rem; color:#5b6472; line-height:1.75; max-width:640px; margin:0 auto 0 0;">Pilih kategori, tentukan tinggi, lalu custom nomor favorit Anda dengan tampilan yang lebih modern dan cepat dipahami.</p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2 mt-3">
                    <span style="padding:8px 12px; border-radius:999px; background:#fff; border:1px solid rgba(217,112,96,0.18); color:#444; font-size:0.85rem; font-weight:700; box-shadow:0 8px 18px rgba(15,23,42,0.05);">3 Varian Kategori</span>
                    <span style="padding:8px 12px; border-radius:999px; background:#fff; border:1px solid rgba(217,112,96,0.18); color:#444; font-size:0.85rem; font-weight:700; box-shadow:0 8px 18px rgba(15,23,42,0.05);">Tinggi 7–10</span>
                    <span style="padding:8px 12px; border-radius:999px; background:#fff; border:1px solid rgba(217,112,96,0.18); color:#444; font-size:0.85rem; font-weight:700; box-shadow:0 8px 18px rgba(15,23,42,0.05);">Order Custom</span>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div style="background:linear-gradient(180deg, rgba(255,255,255,0.98), rgba(255,250,248,0.98)); border:1px solid rgba(217,112,96,0.14); border-radius:24px; padding:18px; box-shadow:0 18px 36px rgba(15,23,42,0.08);">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <article style="padding:14px; border-radius:18px; background:linear-gradient(135deg, #fff, #fff5f2); border:1px solid rgba(217,112,96,0.14);">
                            <div style="font-size:1.35rem; font-weight:900; color:#d97060;">3</div>
                            <div style="font-size:0.82rem; color:#666; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">Kategori</div>
                        </article>
                        <article style="padding:14px; border-radius:18px; background:linear-gradient(135deg, #fff, #fff5f2); border:1px solid rgba(217,112,96,0.14);">
                            <div style="font-size:1.35rem; font-weight:900; color:#d97060;">4</div>
                            <div style="font-size:0.82rem; color:#666; font-weight:700; letter-spacing:0.08em; text-transform:uppercase;">Pilihan Tinggi</div>
                        </article>
                        <article style="grid-column:1 / -1; padding:14px; border-radius:18px; background:linear-gradient(135deg, #d97060, #c65650); color:#fff; box-shadow:0 14px 24px rgba(217,112,96,0.22);">
                            <div style="font-size:0.95rem; font-weight:800; margin-bottom:4px;">Cepat & Praktis</div>
                            <div style="font-size:0.88rem; color:rgba(255,255,255,0.92); line-height:1.5;">Cocok untuk order personal, reseller, atau kebutuhan acara resmi.</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> Filter Section ============================-->
<section class="filter-section" style="padding: 6px 0 18px;">
    <div class="container">
        <div class="filter-shell filter-shell-modern">
            <div class="filter-head">
                <div>
                    <span class="filter-kicker">Filter Produk</span>
                </div>
                <div class="filter-badges">
                    <span>3 kategori</span>
                    <span>Tinggi 7–10</span>
                    <span>Order custom</span>
                </div>
            </div>

            <form class="filter-grid" onsubmit="event.preventDefault(); applyFilters();">
                <label class="filter-field">
                    <span class="filter-label">Kategori</span>
                    <select id="kategoriFilter" class="filter-control" onchange="applyFilters()">
                        <option value="all">Semua</option>
                        <option value="non-ac">Non AC</option>
                        <option value="ac">AC</option>
                        <option value="full-ac">Full AC</option>
                    </select>
                </label>

                <label class="filter-field filter-field--compact">
                    <span class="filter-label">Tinggi</span>
                    <input type="number" id="tinggiCari" class="filter-control" min="7" max="10" placeholder="7–10" oninput="applyFilters()" />
                </label>

                <div class="filter-actions">
                    <button type="button" id="resetBtn" class="filter-btn filter-btn-refresh" onclick="resetFilters()" aria-label="Reset filter">Reset</button>
                    <small id="tinggiHint" class="filter-hint">Ketik angka 7 sampai 10 untuk menyaring hasil.</small>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> Products Grid (Tinggi Only) ============================-->
<section style="padding: 0 0 60px;">
    <div class="container">
        <div class="row g-3" id="productsGrid" style="margin-bottom: 30px; contain: layout style paint;">
            <!-- Products akan di-load di sini dengan JavaScript -->
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> Custom Modal Detail Produk ============================-->

<div id="modalDetail" class="shopee-modal" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100dvh; background: rgba(15,23,42,0.55); backdrop-filter: blur(6px); display: none; align-items: center; justify-content: center; z-index: 10000; animation: fadeIn 0.3s ease; padding: 0;">
    <div class="shopee-modal-content" style="background: #fff; border-radius: 22px; max-width: 980px; width: 98vw; height: auto; box-shadow: 0 24px 60px rgba(15,23,42,0.18); border: none; animation: slideUp 0.3s ease; overflow: hidden; display: flex; flex-direction: row; margin: 24px 0; padding: 24px 18px; gap: 18px;">
    <!-- Left: Product Image Gallery -->
    <div class="shopee-modal-image-panel" style="flex: 1.1; min-width: 0; background: #fff; display: flex; flex-direction: column; align-items: center; justify-content: flex-start; padding: 18px 14px 14px; gap: 12px; border-right: 1px solid #efe4df; border-radius: 14px;">
      <div id="modalImage" class="modal-image" style="width: 100%; max-width: 340px; aspect-ratio: 1 / 1; background: #f8f8f8; border-radius: 18px; display: flex; align-items: center; justify-content: center; overflow: hidden; box-shadow: 0 8px 32px rgba(217,112,96,0.08);">
        <!-- Image will be injected by JS -->
      </div>
      <div id="dotsContainer" style="display: flex; gap: 8px; justify-content: center; margin-top: 10px;"></div>
      <div style="display: flex; gap: 8px; width: 100%; justify-content: center; flex-wrap: wrap; margin-top: 6px;">
        <div style="display: flex; gap: 8px; justify-content: center; align-items: center; width: 100%;">
          <button id="prevBtn" onclick="sliderPrev()" style="background: #fff; border: 1.5px solid #ead8d1; width: 36px; height: 36px; border-radius: 50%; cursor: pointer; font-size: 1rem; color: #D97060; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">‹</button>
          <button id="nextBtn" onclick="sliderNext()" style="background: #fff; border: 1.5px solid #ead8d1; width: 36px; height: 36px; border-radius: 50%; cursor: pointer; font-size: 1rem; color: #D97060; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">›</button>
        </div>
        <div style="display: flex; gap: 8px; justify-content: center; align-items: center; width: 100%; margin-top: 4px;">
          <button onclick="closeDetailModal()" style="flex: 1 1 0; min-width: 0; background: #fff; border: 1.5px solid #ead8d1; color: #374151; border-radius: 999px; padding: 0 12px; height: 36px; font-size: 0.85rem; font-weight: 700; cursor: pointer; box-shadow: 0 4px 10px rgba(15,23,42,0.05);">Tutup</button>
          <button id="beliSekarangBtn" onclick="beliSekarang()" style="flex: 2 1 0; min-width: 0; background: linear-gradient(135deg, #D97060, #C65650); border: none; color: white; border-radius: 999px; padding: 0 14px; height: 36px; font-size: 0.85rem; font-weight: 800; cursor: pointer; box-shadow: 0 8px 14px rgba(217,112,96,0.18);">Beli Sekarang</button>
        </div>
      </div>
    </div>
    <!-- Right: Product Info & Actions -->
    <div class="shopee-modal-detail-panel" style="flex: 1.3; min-width: 0; background: #fff; display: flex; flex-direction: column; padding: 18px 18px 14px; gap: 8px;">
      <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 12px;">
        <div style="min-width: 0;">
          <h2 id="modalTitle" style="font-size: 1rem; line-height: 1.2; font-weight: 900; color: #1a1a1a; margin-bottom: 4px;">Detail Produk</h2>
          <div id="modalDescription" style="color: #4b5563; line-height: 1.35; font-size: 0.88rem; font-weight: 500; margin-bottom: 8px;"></div>
        </div>
        <button onclick="closeDetailModal()" class="modal-close-btn" style="background: #fff; border: 1.5px solid #ead8d1; color: #6b7280; width: 38px; height: 38px; border-radius: 50%; cursor: pointer; font-size: 1.1rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 14px rgba(15,23,42,0.06);">✕</button>
      </div>
      <div id="modalSpecs" class="product-specs-table" style="margin-bottom: 8px; font-size: 0.86rem;"></div>
      <div style="margin-bottom: 8px;">
        <div style="font-size: 0.82rem; font-weight: 700; color: #444; margin-bottom: 4px;">Pilih Jenis Harga</div>
        <div style="display: flex; gap: 8px; flex-wrap: wrap;">
          <button type="button" id="typeEceranBtn" onclick="selectPurchaseType('eceran')" style="border: 1.5px solid #ead8d1; border-radius: 999px; padding: 8px 12px; background: #fff; color: #374151; font-size: 0.82rem; font-weight: 800; cursor: pointer; box-shadow: 0 4px 10px rgba(15,23,42,0.04);">Eceran</button>
          <button type="button" id="typeKodiBtn" onclick="selectPurchaseType('kodi')" style="border: 1.5px solid #ead8d1; border-radius: 999px; padding: 8px 12px; background: #fff; color: #374151; font-size: 0.82rem; font-weight: 800; cursor: pointer; box-shadow: 0 4px 10px rgba(15,23,42,0.04);">Kodi (20 pcs)</button>
        </div>
      </div>
      <div style="margin-bottom: 8px;">
        <div style="font-size: 0.82rem; font-weight: 700; color: #444; margin-bottom: 4px;">Pilih Nomor</div>
        <select id="nomorSelect" class="form-select modal-select" style="border: 1.5px solid #ead8d1; border-radius: 10px; padding: 7px 9px; font-weight: 600; color: #374151; font-size: 0.88rem; width: 100%; background: white; box-shadow: 0 6px 14px rgba(15,23,42,0.04);">
          <option value="">-- Pilih Nomor (1-10) --</option>
          <option value="1">Nomor 1</option>
          <option value="2">Nomor 2</option>
          <option value="3">Nomor 3</option>
          <option value="4">Nomor 4</option>
          <option value="5">Nomor 5</option>
          <option value="6">Nomor 6</option>
          <option value="7">Nomor 7</option>
          <option value="8">Nomor 8</option>
          <option value="9">Nomor 9</option>
          <option value="10">Nomor 10</option>
        </select>
      </div>
      <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
        <div style="flex: 1;">
          <div id="qtyLabel" style="font-size: 0.82rem; font-weight: 700; color: #444; margin-bottom: 4px;">Kuantitas</div>
          <div style="display: flex; align-items: center; gap: 6px;">
            <button type="button" onclick="decrementQty()" style="width: 30px; height: 30px; border-radius: 8px; border: 1.5px solid #ead8d1; background: #fff; color: #d97060; font-size: 0.95rem; font-weight: 900; display: flex; align-items: center; justify-content: center;">-</button>
            <input type="number" id="eceranQty" min="1" value="1" style="width: 52px; padding: 6px 7px; border: 1.5px solid #ead8d1; border-radius: 8px; text-align: center; font-weight: 700; font-size: 0.95rem; background: white; color: #1a1a1a;" onchange="updatePreview()" oninput="updatePreview()" />
            <button type="button" onclick="incrementQty()" style="width: 30px; height: 30px; border-radius: 8px; border: 1.5px solid #ead8d1; background: #fff; color: #d97060; font-size: 0.95rem; font-weight: 900; display: flex; align-items: center; justify-content: center;">+</button>
          </div>
          <div style="display: flex; justify-content: space-between; align-items: center; gap: 8px; margin-top: 6px; padding: 7px 9px; border-radius: 10px; background: #fffaf8; border: 1px solid #f2e6e1;">
            <span style="font-size: 0.82rem; color: #666; font-weight: 700;">Estimasi total</span>
            <strong id="totalPreview" style="font-size: 0.92rem; color: #d97060; font-weight: 900;">Rp 35.000</strong>
          </div>
        </div>
      </div>
      <div style="margin-top: auto; font-size: 0.75rem; color: #666; line-height: 1.3;">💬 <span style="color: #D97060; font-weight: 700;">Belum termasuk ongkir</span> — Konfirmasi & negosiasi via WhatsApp</div>
    </div>
  </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

#modalDetail .modal-kicker {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #d97060;
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 0.18em;
    font-weight: 800;
    margin: 0;
}

#modalDetail .modal-surface {
    box-shadow: 0 24px 60px rgba(15, 23, 42, 0.18);
}

#modalDetail .modal-image-panel {
    background:
        radial-gradient(circle at top, rgba(217, 112, 96, 0.08), transparent 24%),
        linear-gradient(145deg, #fffaf8 0%, #ffffff 100%);
}

#modalDetail .modal-select:focus,
#modalDetail .modal-option-card:focus-within {
    border-color: #d97060 !important;
    box-shadow: 0 0 0 4px rgba(217, 112, 96, 0.12) !important;
    outline: none;
}

#modalDetail .modal-section-label {
    color: #9ca3af;
}

#modalDetail .modal-top-card {
    position: sticky;
    top: 0;
    z-index: 2;
    backdrop-filter: blur(6px);
}

#modalDetail .modal-badge {
    box-shadow: 0 6px 16px rgba(217, 112, 96, 0.12);
}

#modalDetail .modal-footer button:hover {
    transform: translateY(-1px);
}

@keyframes slideUp {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Product Card */
.product-specs-table {
    margin-bottom: 20px;
}
.product-specs-table table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}
.product-specs-table th,
.product-specs-table td {
    padding: 13px 14px;
    vertical-align: top;
}
.product-specs-table th {
    width: 38%;
    text-align: left;
    font-size: 0.7rem;
    letter-spacing: 0.1em;
    color: #888;
    font-weight: 700;
    text-transform: uppercase;
    background: #F9F9F9;
}
.product-specs-table td {
    color: #333;
    font-size: 0.9rem;
    font-weight: 600;
}
.product-specs-table tr:nth-child(even) td {
    background: #FAFAFA;
}
.product-specs-table tr + tr td {
    border-top: 1px solid #ECECEC;
}

.product-card {
    border: 1px solid rgba(217, 112, 96, 0.14);
    border-radius: 18px;
    overflow: hidden;
    background: linear-gradient(180deg, #ffffff 0%, #fffaf8 100%);
    box-shadow: 0 14px 30px rgba(15, 23, 42, 0.08);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    height: 100%;
    --card-color: #D97060;
    contain: layout style paint;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 18px 36px rgba(217, 112, 96, 0.16);
}

.product-card__header {
    position: relative;
    aspect-ratio: 1 / 1;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-color: #f5f5f5;
    overflow: hidden;
}

.product-card__header::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.02) 0%, rgba(15, 23, 42, 0.12) 100%);
}

.product-card__badge {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 1;
    background: rgba(255, 255, 255, 0.96);
    color: var(--card-color);
    font-size: 0.65rem;
    font-weight: 800;
    padding: 6px 10px;
    border-radius: 999px;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.08);
}

.product-card__body {
    padding: 14px 14px 12px;
    display: flex;
    flex-direction: column;
    flex: 1;
    gap: 6px;
}

.product-card__title {
    font-size: 0.92rem;
    font-weight: 800;
    color: #1f2937;
    margin: 0;
}

.product-card__subtitle {
    font-size: 0.75rem;
    color: #6b7280;
    margin: 0;
    font-weight: 600;
}

.product-card__prices {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 2px;
}

.price-item {
    background: #fff;
    padding: 8px;
    border-radius: 12px;
    border: 1px solid rgba(217, 112, 96, 0.16);
    text-align: center;
    box-shadow: 0 6px 14px rgba(15, 23, 42, 0.04);
}

.price-label {
    display: block;
    font-size: 0.62rem;
    font-weight: 800;
    color: #8b95a7;
    margin-bottom: 3px;
    text-transform: uppercase;
    letter-spacing: 0.18em;
}

.price-value {
    display: block;
    font-size: 0.82rem;
    font-weight: 800;
    color: var(--card-color);
}

.product-card__btn {
    width: 100%;
    background: linear-gradient(135deg, #D97060 0%, #C65650 100%);
    border: none;
    color: white;
    padding: 10px 12px;
    border-radius: 999px;
    font-weight: 800;
    cursor: pointer;
    transition: transform 0.18s ease, box-shadow 0.18s ease;
    font-size: 0.82rem;
    box-shadow: 0 10px 18px rgba(217, 112, 96, 0.18);
    margin-top: auto;
}

.product-card__btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 14px 24px rgba(217, 112, 96, 0.24);
}

.filter-shell {
    background: linear-gradient(145deg, #fffaf8 0%, #ffffff 100%);
    border: 1px solid #f3e1db;
    border-radius: 24px;
    padding: 18px;
    box-shadow: 0 18px 36px rgba(217, 112, 96, 0.12);
}

.filter-shell-modern {
    margin-bottom: 18px;
}

.filter-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.7fr auto;
    gap: 12px;
    align-items: end;
}

.filter-field {
    display: grid;
    gap: 6px;
}

.filter-field--compact input {
    max-width: 110px;
}

.filter-actions {
    display: grid;
    gap: 6px;
    align-items: start;
    min-width: 160px;
}

.filter-btn-refresh {
    width: 100%;
    min-height: 42px;
    border-radius: 12px;
    font-size: 0.88rem;
    background: linear-gradient(135deg, #D97060 0%, #C65650 100%);
    color: #fff;
    border: none;
    box-shadow: 0 8px 18px rgba(217, 112, 96, 0.18);
}

.filter-hint {
    display: block;
    color: #8b95a7;
    font-size: 0.78rem;
    line-height: 1.35;
}

.filter-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
}

.filter-kicker {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    border-radius: 999px;
    background: rgba(217, 112, 96, 0.12);
    color: #b35545;
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.18em;
}

.filter-title {
    font-size: 1.05rem;
    font-weight: 800;
    color: #1f2937;
    margin: 8px 0 6px;
}

.filter-copy {
    color: #5b6574;
    font-size: 0.92rem;
    margin: 0;
    max-width: 640px;
}

.filter-badges {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    gap: 8px;
}

.filter-badges span {
    border: 1px solid #f1ddd7;
    background: #fff;
    color: #6b7280;
    border-radius: 999px;
    padding: 6px 10px;
    font-size: 0.75rem;
    font-weight: 700;
}

.filter-label {
    display: block;
    font-size: 0.85rem;
    font-weight: 700;
    color: #374151;
    margin-bottom: 8px;
}

.filter-control {
    width: 100%;
    border: 1.5px solid #e7c5bb;
    border-radius: 14px;
    background: #fff;
    color: #1f2937;
    font-weight: 700;
    padding: 12px 14px;
    font-size: 0.92rem;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.filter-control:focus {
    border-color: #d97060;
    box-shadow: 0 0 0 4px rgba(217, 112, 96, 0.12);
    outline: none;
}

.filter-hint {
    display: block;
    color: #6b7280;
    margin-top: 6px;
    font-size: 0.78rem;
}

.filter-btn {
    width: 100%;
    border: none;
    border-radius: 14px;
    background: linear-gradient(135deg, #D97060 0%, #C65650 100%);
    color: #fff;
    font-weight: 800;
    padding: 12px 14px;
    font-size: 0.92rem;
    box-shadow: 0 10px 24px rgba(217, 112, 96, 0.22);
    transition: transform 0.18s ease, box-shadow 0.18s ease;
}

.filter-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 14px 28px rgba(217, 112, 96, 0.28);
}

/* Custom Radio Button Styling */
input[type="radio"] {
    accent-color: #D97060;
    cursor: pointer;
}

input[type="radio"]:disabled {
    accent-color: #ccc;
    cursor: not-allowed;
}

/* Responsive Styles - Optimized for Mobile */
@media (max-width: 991.98px) {
    .product-card {
        border-radius: 16px;
    }
    .product-card__body {
        padding: 12px;
    }
    .product-card__title {
        font-size: 0.88rem !important;
    }
    .product-card__subtitle {
        font-size: 0.72rem !important;
    }
    .product-card__prices {
        gap: 6px;
    }
    .price-value {
        font-size: 0.78rem !important;
    }

    /* Hero Section */
    .products-hero {
        padding: 20px 0 !important;
        margin-top: 10px !important;
    }
    .products-hero h1 {
        font-size: 1.75rem !important;
    }
    .products-hero p {
        font-size: 0.9rem !important;
    }

    /* Filter Section */
    .filter-grid {
        grid-template-columns: 1fr 1fr !important;
        align-items: stretch !important;
    }
    .filter-actions {
        grid-column: 1 / -1 !important;
        grid-template-columns: 1fr auto !important;
        align-items: center !important;
    }
    .filter-section .filter-control,
    .filter-section .filter-btn {
        padding: 12px 14px !important;
        font-size: 0.9rem !important;
    }

    /* Product Cards */
    .product-card__title {
        font-size: 0.85rem !important;
    }
    .product-card__prices {
        grid-template-columns: 1fr 1fr !important;
    }
}

@media (max-width: 767.98px) {
    .product-card {
        border-radius: 14px;
        box-shadow: 0 10px 22px rgba(15, 23, 42, 0.06);
    }
    .product-card__body {
        padding: 10px;
        gap: 4px;
    }
    .product-card__title {
        font-size: 0.82rem !important;
    }
    .product-card__subtitle {
        font-size: 0.68rem !important;
    }
    .product-card__prices {
        grid-template-columns: 1fr !important;
        gap: 6px;
        margin-bottom: 6px;
    }
    .price-item {
        padding: 7px;
    }
    .price-value {
        font-size: 0.74rem !important;
    }
    .price-label {
        font-size: 0.56rem !important;
    }
    .product-card__btn {
        padding: 8px 10px;
        font-size: 0.75rem !important;
    }
    .filter-grid {
        grid-template-columns: 1fr !important;
        gap: 10px !important;
    }
    .filter-field--compact input {
        max-width: none !important;
    }
    .filter-actions {
        grid-template-columns: 1fr !important;
        min-width: 0 !important;
    }

    /* Hero Section */
    .products-hero {
        padding: 15px 0 !important;
        margin-top: 5px !important;
    }
    .products-hero h1 {
        font-size: 1.4rem !important;
    }
    .products-hero p {
        font-size: 0.85rem !important;
    }

    /* Filter Section */
    .filter-section {
        padding: 12px 0 15px !important;
    }
    .filter-shell {
        padding: 16px !important;
        border-radius: 14px !important;
    }
    .filter-head {
        flex-direction: column !important;
        gap: 10px !important;
    }
    .filter-badges {
        justify-content: flex-start !important;
    }
    .filter-section .col-lg-4,
    .filter-section .col-md-6 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
    .filter-section label,
    .filter-section .filter-label {
        font-size: 0.8rem !important;
    }
    .filter-section .filter-control,
    .filter-section .filter-btn {
        padding: 10px 12px !important;
        font-size: 0.8rem !important;
    }
    .filter-copy,
    .filter-hint {
        font-size: 0.78rem !important;
    }

    /* Product Cards */
    .product-card__body {
        padding: 12px !important;
    }
    .product-card__title {
        font-size: 0.8rem !important;
    }
    .product-card__subtitle {
        font-size: 0.65rem !important;
    }
    .product-card__prices {
        grid-template-columns: 1fr !important;
        margin-bottom: 10px !important;
    }
    .price-item {
        padding: 8px !important;
    }
    .price-value {
        font-size: 0.75rem !important;
    }
    .price-label {
        font-size: 0.5rem !important;
    }
    .product-card__btn {
        padding: 8px !important;
        font-size: 0.75rem !important;
    }

    /* Products Grid */
    #productsGrid {
        --bs-gutter-x: 0.75rem !important;
        --bs-gutter-y: 0.75rem !important;
    }

    /* Modal */
    #modalDetail {
        padding: 0 !important;
    }
    #modalDetail .shopee-modal-content {
        width: 98vw !important;
        max-width: 980px !important;
        max-height: 96dvh !important;
        border-radius: 16px !important;
        overflow: hidden !important;
        flex-direction: column !important;
    }
    #modalDetail .shopee-modal-image-panel {
        min-height: 210px !important;
        padding: 16px 14px 12px !important;
        border-right: none !important;
        border-bottom: 1px solid #efe4df !important;
    }
    #modalDetail .shopee-modal-detail-panel {
        padding: 14px 14px 12px !important;
        max-height: none !important;
        overflow: auto !important;
    }
}

@media (max-width: 575.98px) {
    .product-card {
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(15, 23, 42, 0.06);
    }
    .product-card__header {
        aspect-ratio: 1.02 / 1;
    }
    .product-card__body {
        padding: 10px;
    }
    .product-card__title {
        font-size: 0.78rem !important;
        font-weight: 800 !important;
    }
    .product-card__subtitle {
        font-size: 0.64rem !important;
    }
    .product-card__prices {
        grid-template-columns: 1fr !important;
        gap: 5px !important;
    }
    .price-item {
        padding: 6px !important;
        border-radius: 8px !important;
    }
    .price-value {
        font-size: 0.68rem !important;
    }
    .price-label {
        font-size: 0.52rem !important;
    }
    .product-card__btn {
        padding: 7px !important;
        font-size: 0.72rem !important;
    }
    /* Hero Section */
    .products-hero {
        padding: 12px 0 8px !important;
    }
    .products-hero h1 {
        font-size: 1.2rem !important;
        margin-bottom: 8px !important;
    }
    .products-hero p {
        font-size: 0.8rem !important;
    }

    /* Filter Section */
    .filter-section {
        padding: 10px 0 12px !important;
    }
    .filter-section > .container {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
    .filter-shell {
        padding: 12px !important;
        margin-bottom: 10px !important;
        border-radius: 14px !important;
    }
    .filter-head {
        flex-direction: column !important;
        gap: 10px !important;
    }
    .filter-badges {
        justify-content: flex-start !important;
    }
    .filter-section .filter-label {
        font-size: 0.75rem !important;
        margin-bottom: 6px !important;
    }
    .filter-section .filter-control,
    .filter-section .filter-btn {
        padding: 8px 10px !important;
        font-size: 0.75rem !important;
    }

    /* Product Cards - 2 columns layout */
    .product-card {
        border-radius: 10px !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06) !important;
    }
    .product-card__header {
        aspect-ratio: 1 / 1 !important;
    }
    .product-card__body {
        padding: 10px !important;
    }
    .product-card__title {
        font-size: 0.7rem !important;
        font-weight: 700 !important;
        margin-bottom: 2px !important;
    }
    .product-card__subtitle {
        font-size: 0.6rem !important;
        margin-bottom: 6px !important;
    }
    .product-card__prices {
        grid-template-columns: 1fr !important;
        gap: 4px !important;
        margin-bottom: 6px !important;
    }
    .price-item {
        padding: 6px !important;
        border-radius: 5px !important;
    }
    .price-value {
        font-size: 0.65rem !important;
    }
    .price-label {
        font-size: 0.45rem !important;
    }
    .product-card__btn {
        padding: 6px !important;
        font-size: 0.65rem !important;
    }

    /* Products Grid - 2 columns */
    section[style*="padding: 0 0 60px"] > .container {
        padding-left: 6px !important;
        padding-right: 6px !important;
    }
    #productsGrid {
        --bs-gutter-x: 0.5rem !important;
        --bs-gutter-y: 0.5rem !important;
        margin-bottom: 10px !important;
    }
    #productsGrid .row {
        --bs-gutter-x: 0.5rem !important;
        --bs-gutter-y: 0.5rem !important;
    }

    /* Modal */
    #modalDetail {
        padding: 0 !important;
    }
    #modalDetail .shopee-modal-content {
        width: 100vw !important;
        max-width: 100vw !important;
        height: 100dvh !important;
        max-height: 100dvh !important;
        border-radius: 0 !important;
        margin: 0 !important;
        flex-direction: column !important;
        overflow: auto !important;
    }
    #modalDetail .shopee-modal-image-panel {
        min-height: 180px !important;
        padding: 12px 12px 10px !important;
        border-right: none !important;
        border-bottom: 1px solid #efe4df !important;
    }
    #modalDetail .shopee-modal-detail-panel {
        padding: 12px 12px 10px !important;
        overflow: auto !important;
    }
    #modalImage {
        font-size: 110px !important;
    }
    #prevBtn,
    #nextBtn {
        width: 34px !important;
        height: 34px !important;
        font-size: 1rem !important;
    }
    #prevBtn {
        left: 10px !important;
    }
    #nextBtn {
        right: 10px !important;
    }
}

</style>
<script>
// Data Produk
const produktData = {
    'non-ac': {
        name: 'Songkok Non AC',
        hargaEceran: 35000,
        hargaKodi: 530000,
        color: '#D97060',
        image: '/img/category/nonac.png',
        images: ['/img/category/nonac.png', '/img/category/nonac.png'],
        desc: 'Songkok Non AC yang kokoh dan elegan. Cocok untuk tampilan formal dengan kenyamanan standar.',
        specs: [
            { label: 'Material', value: 'Katun premium' },
            { label: 'Ventilasi', value: 'Tanpa ventilasi' },
            { label: 'Diameter', value: '18 cm' },
            { label: 'Warna', value: 'Hitam' }
        ]
    },
    'ac': {
        name: 'Songkok AC',
        hargaEceran: 40000,
        hargaKodi: 550000,
        color: '#C65650',
        image: '/img/category/ac.png',
        images: ['/img/category/ac.png', '/img/category/ac.png'],
        desc: 'Songkok AC dengan sirkulasi udara baik. Nyaman untuk aktivitas harian dan ibadah.',
        specs: [
            { label: 'Material', value: 'Katun plus mesh' },
            { label: 'Ventilasi', value: 'Lubang samping ganda' },
            { label: 'Diameter', value: '18 cm' },
            { label: 'Warna', value: 'Hitam' }
        ]
    },
    'full-ac': {
        name: 'Songkok Full AC',
        hargaEceran: 40000,
        hargaKodi: 550000,
        color: '#A84A40',
        image: '/img/category/fullac.png',
        images: ['/img/category/fullac.png', '/img/category/fullac.png'],
        desc: 'Songkok Full AC dengan teknologi pendinginan maksimal. Premium untuk kenyamanan maksimal.',
        specs: [
            { label: 'Material', value: 'Mikrofiber premium' },
            { label: 'Ventilasi', value: 'Jaring penuh pada seluruh permukaan' },
            { label: 'Diameter', value: '18 cm' },
            { label: 'Warna', value: 'Hitam' }
        ]
    }
};

let currentSelected = {
    kategori: null,
    tinggi: null,
    purchaseType: 'eceran',
    sliderIndex: 0,
    sliderImages: []
};

// Cache untuk currency formatting
const currencyCache = {};

// Format Currency dengan cache
function formatCurrency(amount) {
    if (currencyCache[amount]) {
        return currencyCache[amount];
    }
    const formatted = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
    currencyCache[amount] = formatted;
    return formatted;
}

// Debounce helper untuk filter
let filterTimeout;
function debounceFilter() {
    clearTimeout(filterTimeout);
    filterTimeout = setTimeout(() => {
        generateProducts();
    }, 150);
}

// Generate Products dengan rendering cepat (optimized)
function generateProducts() {
    let kategoriFilter = document.getElementById('kategoriFilter').value;
    let tinggiCari = document.getElementById('tinggiCari').value;
    const kategoriList = kategoriFilter === 'all' ? ['non-ac', 'ac', 'full-ac'] : [kategoriFilter];
    
    let html = '';
    
    kategoriList.forEach(kategori => {
        const produk = produktData[kategori];
        
        // Heading untuk kategori dengan product image
        html += `
        <div class="col-12" style="margin-bottom: 20px; margin-top: 15px; contain: layout;">
            <h3 style="font-size: 1.5rem; font-weight: 900; color: #1a1a1a; display: flex; align-items: center; gap: 12px; margin: 0;">
                <img src="${produk.image}" alt="${produk.name}" style="width: 40px; height: 40px; object-fit: contain; border-radius: 8px; background: #f5f5f5; padding: 4px;" />
                ${produk.name}
            </h3>
            <div style="height: 3px; background: linear-gradient(to right, ${produk.color}, ${produk.color}99); width: 100px; margin-top: 10px; border-radius: 2px;"></div>
        </div>
        `;
        
        for (let tinggi = 7; tinggi <= 10; tinggi++) {
            // Filter berdasarkan search tinggi
            if (tinggiCari && parseInt(tinggiCari) !== tinggi) {
                continue;
            }
            
            const eceranPrice = formatCurrency(produk.hargaEceran);
            const kodiPrice = formatCurrency(produk.hargaKodi);
            
            html += `
            <div class="col-6 col-md-4 col-lg-3" style="contain: layout;">
                <div class="product-card" style="--card-color: ${produk.color}">
                    <div class="product-card__header" style="background-image: url('${produk.image}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <span class="product-card__badge">Stok 50+</span>
                    </div>
                    <div class="product-card__body">
                        <h5 class="product-card__title">Tinggi ${tinggi}</h5>
                        <p class="product-card__subtitle">Nomor 7-10</p>
                        <div class="product-card__prices">
                            <div class="price-item">
                                <span class="price-label">Eceran</span>
                                <span class="price-value">${eceranPrice}</span>
                            </div>
                            <div class="price-item">
                                <span class="price-label">Kodi</span>
                                <span class="price-value">${kodiPrice}</span>
                            </div>
                        </div>
                        <button class="product-card__btn" onclick="openDetailModal('${kategori}', ${tinggi})">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
            `;
        }
        
    });
    
    const grid = document.getElementById('productsGrid');
    if (html.trim()) {
        grid.innerHTML = html;
    } else {
        grid.innerHTML = '<div class="col-12"><div style="text-align: center; padding: 60px 20px; background: white; border-radius: 18px; box-shadow: 0 8px 25px rgba(217,112,96,0.08);"><p style="color: #666; font-size: 1.2rem; font-weight: 600; margin: 0;">🔍 Tidak ada produk yang sesuai filter.</p><p style="color: #999; font-size: 0.95rem; margin-top: 8px;">Coba ubah pilihan kategori atau tinggi</p></div></div>';
    }
}

// Open Detail Modal
function openDetailModal(kategori, tinggi) {
    const produk = produktData[kategori];
    
    currentSelected.kategori = kategori;
    currentSelected.tinggi = tinggi;
    currentSelected.purchaseType = 'eceran';
    currentSelected.sliderIndex = 0;
    currentSelected.sliderImages = produk.images;
    
    // Update modal content
    document.getElementById('modalTitle').textContent = `${produk.name} - Tinggi ${tinggi}`;
    document.getElementById('modalDescription').textContent = produk.desc;

    // Render spesifikasi dan dimensi produk
    const specs = produk.specs || [];
    let specsHtml = '<div style="border: 1px solid #ECECEC; border-radius: 14px; overflow: hidden; background: #fff;">';
    specsHtml += '<table><tbody>';
    specsHtml += `<tr><th>Kategori</th><td>${produk.name}</td></tr>`;
    specsHtml += `<tr><th>Tinggi</th><td>${tinggi} cm</td></tr>`;
    specsHtml += `<tr><th>Nomor</th><td>1 - 10</td></tr>`;
    specs.forEach(item => {
        specsHtml += `<tr><th>${item.label}</th><td>${item.value}</td></tr>`;
    });
    specsHtml += '</tbody></table></div>';
    document.getElementById('modalSpecs').innerHTML = specsHtml;
    
    // Reset quantities
    document.getElementById('eceranQty').value = 1;
    document.getElementById('nomorSelect').value = '';

    // Reset purchase type and pricing labels
    selectPurchaseType('eceran');
    const qtyLabel = document.getElementById('qtyLabel');
    if (qtyLabel) qtyLabel.textContent = 'Kuantitas';
    
    // Initialize slider
    updateSlider();
    
    // Show modal
    document.getElementById('modalDetail').style.display = 'flex';
}

// Close Detail Modal
function closeDetailModal() {
    document.getElementById('modalDetail').style.display = 'none';
}

// Slider Functions
function updateSlider() {
    const images = currentSelected.sliderImages;
    const index = currentSelected.sliderIndex;
    const produk = produktData[currentSelected.kategori];
    
    // Update image display
    const imageEl = document.getElementById('modalImage');
    const imageSrc = images[index];
    
    // Check if it's an image path or emoji
    if (imageSrc.startsWith('/img/') || imageSrc.endsWith('.png') || imageSrc.endsWith('.jpeg') || imageSrc.endsWith('.jpg')) {
        // Display as image
        imageEl.innerHTML = `<img src="${imageSrc}" alt="Produk" style="max-width: 100%; max-height: 100%; object-fit: contain;" />`;
    } else {
        // Display as emoji
        imageEl.textContent = imageSrc;
        imageEl.style.color = produk.color;
    }
    
    // Update button visibility
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    if (images.length > 1) {
        prevBtn.style.display = 'flex';
        nextBtn.style.display = 'flex';
        
        // Hide/show buttons based on position
        prevBtn.style.opacity = index === 0 ? '0.3' : '1';
        prevBtn.style.pointerEvents = index === 0 ? 'none' : 'auto';
        nextBtn.style.opacity = index === images.length - 1 ? '0.3' : '1';
        nextBtn.style.pointerEvents = index === images.length - 1 ? 'none' : 'auto';
        
        // Update dots
        updateDots();
    } else {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    }
}

function updateDots() {
    const images = currentSelected.sliderImages;
    const index = currentSelected.sliderIndex;
    const dotsContainer = document.getElementById('dotsContainer');
    
    // Clear existing dots
    dotsContainer.innerHTML = '';
    
    // Create new dots
    for (let i = 0; i < images.length; i++) {
        const dot = document.createElement('button');
        dot.style.cssText = `
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            background: ${i === index ? '#D97060' : 'rgba(217,112,96,0.3)'};
            transition: all 0.3s ease;
        `;
        dot.onclick = () => {
            currentSelected.sliderIndex = i;
            updateSlider();
        };
        dotsContainer.appendChild(dot);
    }
}

function sliderPrev() {
    const images = currentSelected.sliderImages;
    if (currentSelected.sliderIndex > 0) {
        currentSelected.sliderIndex--;
        updateSlider();
    }
}

function sliderNext() {
    const images = currentSelected.sliderImages;
    if (currentSelected.sliderIndex < images.length - 1) {
        currentSelected.sliderIndex++;
        updateSlider();
    }
}

// Select Purchase Type
function selectPurchaseType(type) {
    currentSelected.purchaseType = type;
    const eceranBtn = document.getElementById('typeEceranBtn');
    const kodiBtn = document.getElementById('typeKodiBtn');
    const qtyLabel = document.getElementById('qtyLabel');

    if (eceranBtn && kodiBtn) {
        eceranBtn.style.background = type === 'eceran' ? '#fff7f4' : '#fff';
        eceranBtn.style.borderColor = type === 'eceran' ? '#d97060' : '#ead8d1';
        eceranBtn.style.color = type === 'eceran' ? '#d97060' : '#374151';
        kodiBtn.style.background = type === 'kodi' ? '#fff7f4' : '#fff';
        kodiBtn.style.borderColor = type === 'kodi' ? '#d97060' : '#ead8d1';
        kodiBtn.style.color = type === 'kodi' ? '#d97060' : '#374151';
    }

    if (qtyLabel) {
        qtyLabel.textContent = type === 'kodi' ? 'Kuantitas (kodi)' : 'Kuantitas';
    }

    updatePreview();
}

// Update Preview untuk total harga
function updatePreview() {
    const produk = produktData[currentSelected.kategori];
    if (!produk) return;

    const qty = Math.max(1, parseInt(document.getElementById('eceranQty')?.value || 1));
    const price = currentSelected.purchaseType === 'kodi' ? produk.hargaKodi : produk.hargaEceran;
    const total = price * qty;
    const totalPreview = document.getElementById('totalPreview');
    const modalPriceTag = document.getElementById('modalPriceTag');
    const modalPriceTagOld = document.getElementById('modalPriceTagOld');

    if (modalPriceTag) {
        modalPriceTag.textContent = formatCurrency(price);
    }
    if (modalPriceTagOld) {
        modalPriceTagOld.textContent = currentSelected.purchaseType === 'kodi' ? 'Harga per 1 kodi (20 pcs)' : 'Harga per 1 pcs';
    }
    if (totalPreview) {
        totalPreview.textContent = formatCurrency(total);
    }
}

function incrementQty() {
    const input = document.getElementById('eceranQty');
    input.value = Math.max(1, (parseInt(input.value) || 1) + 1);
    updatePreview();
}

function decrementQty() {
    const input = document.getElementById('eceranQty');
    input.value = Math.max(1, (parseInt(input.value) || 1) - 1);
    updatePreview();
}

// Beli Sekarang via WhatsApp
function beliSekarang() {
    const nomor = document.getElementById('nomorSelect').value;
    
    if (!nomor) {
        alert('⚠️ Pilih nomor terlebih dahulu!');
        return;
    }
    
    const produk = produktData[currentSelected.kategori];
    const tinggi = currentSelected.tinggi;
    const tipe = currentSelected.purchaseType;
    
    const qty = document.getElementById('eceranQty').value;
    const satuan = tipe === 'kodi' ? ' kodi' : 'pcs';
    const harga = (tipe === 'kodi' ? produk.hargaKodi : produk.hargaEceran) * qty;
    
    // WhatsApp Template
    const waNumber = '6281234567890'; // Ganti dengan no WA bisnis
    const message = `Halo Tebu Mas Gresik 👋

Saya ingin memesan:
📦 Produk: ${produk.name}
📏 Tinggi: ${tinggi}
📍 Nomor: ${nomor}
📊 Jumlah: ${qty} ${satuan}
💰 Total: ${formatCurrency(harga)}

Tolong proses pesanan saya. Terima kasih!`;
    
    const waURL = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
    window.open(waURL, '_blank');
    
    closeDetailModal();
}

function applyFilters() {
    const tinggiInput = document.getElementById('tinggiCari');
    const hint = document.getElementById('tinggiHint');
    const value = tinggiInput.value.trim();

    if (value !== '') {
        const num = Number(value);
        if (!Number.isInteger(num) || num < 7 || num > 10) {
            hint.textContent = 'Masukkan angka antara 7 sampai 10.';
            hint.style.color = '#c65650';
            tinggiInput.style.borderColor = '#d97060';
            return;
        }
    }

    hint.textContent = 'Ketik angka 7 sampai 10 untuk menyaring hasil.';
    hint.style.color = '#6b7280';
    tinggiInput.style.borderColor = '#d97060';
    generateProducts();
}

function resetFilters() {
    const kategoriFilter = document.getElementById('kategoriFilter');
    const tinggiInput = document.getElementById('tinggiCari');
    const hint = document.getElementById('tinggiHint');

    if (kategoriFilter) kategoriFilter.value = 'all';
    if (tinggiInput) tinggiInput.value = '';
    if (hint) {
        hint.textContent = 'Ketik angka 7 sampai 10 untuk menyaring hasil.';
        hint.style.color = '#6b7280';
    }
    generateProducts();
}

// Close modal when clicking outside
document.addEventListener('click', function(e) {
    const modal = document.getElementById('modalDetail');
    if (e.target === modal) {
        closeDetailModal();
    }
});

// Load produk saat halaman dimuat dengan optimized loading
document.addEventListener('DOMContentLoaded', function() {
    // Render halaman dasar dulu
    generateProducts();
    
    const tinggiInput = document.getElementById('tinggiCari');
    if (tinggiInput) {
        tinggiInput.addEventListener('input', debounceFilter);
    }

    const kategoriSelect = document.getElementById('kategoriFilter');
    if (kategoriSelect) {
        kategoriSelect.addEventListener('change', applyFilters);
    }
});
</script>

@endsection
