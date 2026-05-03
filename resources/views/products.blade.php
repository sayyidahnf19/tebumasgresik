@extends('layouts.app')

@section('title', 'Produk Songkok - Tebu Mas Gresik')

@section('content')

<!-- ============================================-->
<!-- <section> Products Hero ============================-->
<section style="padding: 80px 0 0; background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%); margin-top: 60px;">
    <div class="container">
        <div class="text-center mb-8">
            <h1 class="fw-bold mb-2" style="font-size: 2.4rem; color: #1a1a1a; line-height: 1.3;">Koleksi Songkok Premium Tebu Mas</h1>
            <p class="mb-3" style="font-size: 1rem; color: #666; line-height: 1.6; max-width: 700px; margin-left: auto; margin-right: auto;">Pilih kategori dan tinggi songkok, lalu customize dengan nomor pilihan Anda</p>
            <div style="width: 120px; height: 4px; background: linear-gradient(to right, #D97060, #C65650); margin: 20px auto; border-radius: 2px;"></div>
        </div>
    </div>
</section>

<!-- ============================================-->
<!-- <section> Filter Section ============================-->
<section style="padding: 20px 0 30px;">
    <div class="container">
        <div style="background: white; padding: 30px; border-radius: 18px; box-shadow: 0 10px 35px rgba(217,112,96,0.1); margin-bottom: 30px;">
            <div class="row g-3 align-items-end">
                <!-- Kategori Filter -->
                <div class="col-lg-4 col-md-6">
                    <label style="font-weight: 700; color: #333; margin-bottom: 10px; display: block; font-size: 0.95rem;">📦 Kategori Produk</label>
                    <select id="kategoriFilter" class="form-select" style="border: 2.5px solid #D97060; border-radius: 12px; padding: 14px 16px; font-weight: 600; color: #333; font-size: 0.95rem; transition: all 0.3s ease;" onchange="generateProducts()">
                        <option value="all">✓ Semua Kategori</option>
                        <option value="non-ac">Songkok Non AC</option>
                        <option value="ac">Songkok AC</option>
                        <option value="full-ac">Songkok Full AC</option>
                    </select>
                </div>

                <!-- Cari Tinggi -->
                <div class="col-lg-4 col-md-6">
                    <label style="font-weight: 700; color: #333; margin-bottom: 10px; display: block; font-size: 0.95rem;">📏 Cari Tinggi</label>
                    <input type="number" id="tinggiCari" class="form-control" min="7" max="10" placeholder="Masukkan nomor tinggi (7-10)" style="border: 2.5px solid #D97060; border-radius: 12px; padding: 14px 16px; font-weight: 600; color: #333; font-size: 0.95rem;" />
                </div>

                <!-- Reset Button -->
                <div class="col-lg-4 col-md-6">
                    <button type="button" class="btn w-100" style="background: linear-gradient(135deg, #D97060, #C65650); color: white; border: none; font-weight: 700; padding: 14px; border-radius: 12px; font-size: 0.95rem; transition: all 0.3s ease; box-shadow: 0 8px 20px rgba(217,112,96,0.2);" onclick="resetFilters()" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 30px rgba(217,112,96,0.3)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.2)'">
                        ↻ Reset Filter
                    </button>
                </div>
            </div>
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
<div id="modalDetail" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); display: none; align-items: center; justify-content: center; z-index: 10000; animation: fadeIn 0.3s ease; padding: 20px;">
    <div style="background: white; border-radius: 16px; max-width: 1000px; width: 100%; max-height: 85vh; box-shadow: 0 25px 80px rgba(0,0,0,0.15); animation: slideUp 0.3s ease; overflow: hidden; display: flex; flex-direction: column; margin: auto;">
        <!-- Modal Header -->
        <div style="background: white; border-bottom: 1px solid #E0E0E0; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; flex-shrink: 0; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
            <h2 id="modalTitle" style="margin: 0; font-size: 1.1rem; font-weight: 800; color: #1a1a1a;">Detail Produk</h2>
            <button onclick="closeDetailModal()" style="background: #f0f0f0; border: none; color: #666; width: 36px; height: 36px; border-radius: 50%; cursor: pointer; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;" onmouseover="this.style.background='#e0e0e0'" onmouseout="this.style.background='#f0f0f0'">✕</button>
        </div>
        
        <!-- Modal Content -->
        <div style="flex: 1; display: flex; overflow: hidden;">
            <!-- Left: Product Image Slider -->
            <div style="flex: 1; background: linear-gradient(135deg, #F5F5F5 0%, #EEEEEE 100%); display: flex; align-items: center; justify-content: center; position: relative; padding: 30px 20px; overflow: hidden;">
                <!-- Slider Container -->
                <div id="sliderContainer" style="position: relative; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                    <!-- Image -->
                    <div id="modalImage" style="color: #D97060; font-size: 160px; text-shadow: 0 10px 30px rgba(217,112,96,0.1);">👑</div>
                    
                    <!-- Prev Button -->
                    <button id="prevBtn" onclick="sliderPrev()" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #D97060; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.12); font-weight: bold;" onmouseover="this.style.background='white'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.9)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.12)'">
                        ‹
                    </button>
                    
                    <!-- Next Button -->
                    <button id="nextBtn" onclick="sliderNext()" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #D97060; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.12); font-weight: bold;" onmouseover="this.style.background='white'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'" onmouseout="this.style.background='rgba(255,255,255,0.9)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.12)'">
                        ›
                    </button>
                    
                    <!-- Dot Indicators -->
                    <div id="dotsContainer" style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px;"></div>
                </div>
            </div>
            
            <!-- Right: Details & Purchase Panel -->
            <div style="width: 380px; background: #FAFAFA; overflow-y: auto; display: flex; flex-direction: column; border-left: 1px solid #E0E0E0;">
                <!-- Content Scroll Area -->
                <div style="flex: 1; padding: 28px; overflow-y: auto;">
                    <!-- Product Title & Description -->
                    <div style="margin-bottom: 24px;">
                        <div style="height: 2px; background: #D97060; width: 50px; margin-bottom: 14px; border-radius: 1px;"></div>
                        <div id="modalDescription" style="color: #555; line-height: 1.7; font-size: 0.9rem; font-weight: 500;">
                            <!-- Deskripsi akan di-isi oleh JS -->
                        </div>
                    </div>
                    
                    <!-- Nomor Selection -->
                    <div style="margin-bottom: 20px;">
                        <label style="font-weight: 700; color: #333; margin-bottom: 8px; display: block; font-size: 0.85rem;">Pilih Nomor (1-10)</label>
                        <select id="nomorSelect" class="form-select" style="border: 1.5px solid #E0E0E0; border-radius: 10px; padding: 10px 12px; font-weight: 600; color: #333; font-size: 0.85rem; width: 100%; background: white; transition: all 0.3s ease;">
                            <option value="">-- Pilih Nomor --</option>
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
                    
                    <!-- Pilihan Beli -->
                    <label style="font-weight: 700; color: #333; margin-bottom: 10px; display: block; font-size: 0.85rem;">Tipe Pembelian</label>
                    
                    <!-- Eceran Option -->
                    <div id="eceranOption" style="border: 1.5px solid #E0E0E0; border-radius: 10px; padding: 12px; margin-bottom: 10px; cursor: pointer; transition: all 0.3s ease; background: white;" onclick="selectPurchaseType('eceran')" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 4px 12px rgba(217,112,96,0.1)'" onmouseout="this.style.borderColor='#E0E0E0'; this.style.boxShadow='none'">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                            <input type="radio" id="radioEceran" name="purchaseType" value="eceran" checked style="width: 16px; height: 16px; cursor: pointer;">
                            <div>
                                <label for="radioEceran" style="font-weight: 700; color: #333; margin: 0; cursor: pointer; font-size: 0.85rem; display: block;">Eceran (per pcs)</label>
                                <div id="eceranPrice" style="font-size: 1rem; font-weight: 800; color: #D97060; margin-top: 3px;">Rp 35.000</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px;">
                            <label style="font-size: 0.8rem; color: #666; font-weight: 600; min-width: 30px;">Qty:</label>
                            <input type="number" id="eceranQty" min="1" value="1" style="flex: 1; padding: 6px 10px; border: 1.5px solid #E0E0E0; border-radius: 8px; text-align: center; font-weight: 600; font-size: 0.85rem;" placeholder="Jumlah" onchange="updatePreview()" oninput="updatePreview()" />
                        </div>
                    </div>
                    
                    <!-- Kodi Option -->
                    <div id="kodiOption" style="border: 1.5px solid #E0E0E0; border-radius: 10px; padding: 12px; cursor: pointer; transition: all 0.3s ease; background: white;" onclick="selectPurchaseType('kodi')" onmouseover="this.style.borderColor='#D97060'; this.style.boxShadow='0 4px 12px rgba(217,112,96,0.1)'" onmouseout="this.style.borderColor='#E0E0E0'; this.style.boxShadow='none'">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                            <input type="radio" id="radioKodi" name="purchaseType" value="kodi" style="width: 16px; height: 16px; cursor: pointer;">
                            <div>
                                <label for="radioKodi" style="font-weight: 700; color: #333; margin: 0; cursor: pointer; font-size: 0.85rem; display: block;">Kodi - 20 pcs/kodi</label>
                                <div id="kodiPrice" style="font-size: 1rem; font-weight: 800; color: #D97060; margin-top: 3px;">Rp 530.000</div>
                                <div style="font-size: 0.7rem; color: #999; margin-top: 2px; font-weight: 600;" id="kodiPerUnit">Rp 26.500/pcs</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 6px;">
                            <label style="font-size: 0.8rem; color: #666; font-weight: 600; min-width: 30px;">Qty:</label>
                            <input type="number" id="kodiQty" min="1" value="1" style="flex: 1; padding: 6px 10px; border: 1.5px solid #E0E0E0; border-radius: 8px; text-align: center; font-weight: 600; font-size: 0.85rem; background: white;" placeholder="Jumlah" disabled onchange="updatePreview()" oninput="updatePreview()" />
                        </div>
                    </div>
                </div>
                
                <!-- Footer - Total & Buttons (Fixed) -->
                <div style="padding: 16px 28px; border-top: 1px solid #E0E0E0; background: white; flex-shrink: 0;">
                    <!-- Preview Total -->
                    <div style="background: #F5F5F5; padding: 12px; border-radius: 10px; margin-bottom: 12px; text-align: center; border: 1px solid #E0E0E0;">
                        <div style="font-size: 0.75rem; color: #999; margin-bottom: 4px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Total Harga</div>
                        <div id="totalPreview" style="font-size: 1.2rem; font-weight: 900; color: #D97060;">Rp 35.000</div>
                    </div>
                    
                    <!-- Shipping Note -->
                    <div style="background: rgba(217,112,96,0.08); padding: 8px 12px; border-radius: 8px; margin-bottom: 12px; border-left: 3px solid #D97060;">
                        <p style="font-size: 0.75rem; color: #666; margin: 0; font-weight: 600;">💬 <span style="color: #D97060; font-weight: 700;">Harga belum termasuk ongkir</span> - Negosiasi setelah Anda menghubungi via WhatsApp</p>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div style="display: flex; gap: 8px;">
                        <button onclick="closeDetailModal()" style="flex: 0.7; background: #F5F5F5; border: 1px solid #E0E0E0; color: #333; padding: 10px; border-radius: 10px; font-weight: 700; cursor: pointer; transition: all 0.3s ease; font-size: 0.85rem;" onmouseover="this.style.background='#E8E8E8'" onmouseout="this.style.background='#F5F5F5'">
                            Tutup
                        </button>
                        <button id="beliSekarangBtn" onclick="beliSekarang()" style="flex: 1.3; background: #D97060; border: none; color: white; padding: 10px; border-radius: 10px; font-weight: 700; cursor: pointer; transition: all 0.3s ease; font-size: 0.85rem; box-shadow: 0 6px 16px rgba(217,112,96,0.2);" onmouseover="this.style.background='#C65650'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 8px 20px rgba(217,112,96,0.3)'" onmouseout="this.style.background='#D97060'; this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 16px rgba(217,112,96,0.2)'">
                            Pesan via WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
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
.product-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    background: white;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    display: flex;
    flex-direction: column;
    height: 100%;
    --card-color: #D97060;
    contain: layout style paint;
    will-change: transform, box-shadow;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(217, 112, 96, 0.15);
}

.product-card__header {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-color: #f5f5f5;
    aspect-ratio: 1 / 1;
    position: relative;
    overflow: hidden;
}

.product-card__badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: white;
    color: var(--card-color);
    font-size: 0.65rem;
    font-weight: 700;
    padding: 5px 11px;
    border-radius: 20px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
}

.product-card__body {
    padding: 18px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.product-card__title {
    font-size: 0.9rem;
    font-weight: 800;
    color: #1a1a1a;
    margin: 0 0 4px 0;
}

.product-card__subtitle {
    font-size: 0.75rem;
    color: #999;
    margin: 0 0 12px 0;
    font-weight: 600;
}

.product-card__prices {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 14px;
}

.price-item {
    background: rgba(217, 112, 96, 0.08);
    padding: 10px;
    border-radius: 8px;
    border: 1px solid rgba(217, 112, 96, 0.15);
    text-align: center;
}

.price-label {
    display: block;
    font-size: 0.65rem;
    font-weight: 700;
    color: #999;
    margin-bottom: 4px;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.price-value {
    display: block;
    font-size: 0.85rem;
    font-weight: 800;
    color: var(--card-color);
}

.product-card__btn {
    width: 100%;
    background: #D97060;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 10px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.85rem;
    box-shadow: 0 6px 15px rgba(217, 112, 96, 0.15);
    margin-top: auto;
}

.product-card__btn:hover {
    background: #C65650;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(217, 112, 96, 0.25);
}

.product-card__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(217, 112, 96, 0.25);
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
        desc: 'Songkok Non AC yang kokoh dan elegan. Cocok untuk tampilan formal dengan kenyamanan standar.'
    },
    'ac': {
        name: 'Songkok AC',
        hargaEceran: 40000,
        hargaKodi: 550000,
        color: '#C65650',
        image: '/img/category/ac.png',
        images: ['/img/category/ac.png', '/img/category/ac.png'],
        desc: 'Songkok AC dengan sirkulasi udara baik. Nyaman untuk aktivitas harian dan ibadah.'
    },
    'full-ac': {
        name: 'Songkok Full AC',
        hargaEceran: 40000,
        hargaKodi: 550000,
        color: '#A84A40',
        image: '/img/category/fullac.png',
        images: ['/img/category/fullac.png', '/img/category/fullac.png'],
        desc: 'Songkok Full AC dengan teknologi pendinginan maksimal. Premium untuk kenyamanan maksimal.'
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
        
        // Grid tinggi 7-10
        html += `<div class="col-12"><div class="row g-4" style="contain: layout;">`;
        
        for (let tinggi = 7; tinggi <= 10; tinggi++) {
            // Filter berdasarkan search tinggi
            if (tinggiCari && parseInt(tinggiCari) !== tinggi) {
                continue;
            }
            
            const eceranPrice = formatCurrency(produk.hargaEceran);
            const kodiPrice = formatCurrency(produk.hargaKodi);
            
            html += `
            <div class="col-lg-3 col-md-6" style="contain: layout;">
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
        
        html += `</div></div>`;
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
    
    // Update prices
    document.getElementById('eceranPrice').textContent = formatCurrency(produk.hargaEceran);
    document.getElementById('kodiPrice').textContent = formatCurrency(produk.hargaKodi);
    
    // Reset quantities
    document.getElementById('eceranQty').value = 1;
    document.getElementById('kodiQty').value = 1;
    document.getElementById('nomorSelect').value = '';
    
    // Reset selection style
    selectPurchaseType('eceran');
    
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
    
    const eceranOption = document.getElementById('eceranOption');
    const kodiOption = document.getElementById('kodiOption');
    const radioEceran = document.getElementById('radioEceran');
    const radioKodi = document.getElementById('radioKodi');
    const eceranQty = document.getElementById('eceranQty');
    const kodiQty = document.getElementById('kodiQty');
    
    if (type === 'eceran') {
        // Aktif untuk eceran
        eceranOption.style.borderColor = '#D97060';
        eceranOption.style.background = 'white';
        eceranOption.style.boxShadow = '0 4px 12px rgba(217,112,96,0.15)';
        eceranQty.style.borderColor = '#D97060';
        eceranQty.style.background = 'white';
        eceranQty.style.color = '#333';
        eceranQty.disabled = false;
        
        // Nonaktif untuk kodi
        kodiOption.style.borderColor = '#ccc';
        kodiOption.style.background = '#f9f9f9';
        kodiOption.style.boxShadow = '0 0px 0px rgba(0,0,0,0)';
        kodiQty.style.borderColor = '#ccc';
        kodiQty.style.background = '#f5f5f5';
        kodiQty.style.color = '#999';
        kodiQty.disabled = true;
        
        // Update radio button
        radioEceran.checked = true;
        radioKodi.checked = false;
        
        // Update label colors
        document.querySelector('label[for="radioEceran"]').style.color = '#D97060';
        document.querySelector('label[for="radioKodi"]').style.color = '#999';
        
        eceranQty.focus();
    } else {
        // Aktif untuk kodi
        kodiOption.style.borderColor = '#D97060';
        kodiOption.style.background = 'white';
        kodiOption.style.boxShadow = '0 4px 12px rgba(217,112,96,0.15)';
        kodiQty.style.borderColor = '#D97060';
        kodiQty.style.background = 'white';
        kodiQty.style.color = '#333';
        kodiQty.disabled = false;
        
        // Nonaktif untuk eceran
        eceranOption.style.borderColor = '#ccc';
        eceranOption.style.background = '#f9f9f9';
        eceranOption.style.boxShadow = '0 0px 0px rgba(0,0,0,0)';
        eceranQty.style.borderColor = '#ccc';
        eceranQty.style.background = '#f5f5f5';
        eceranQty.style.color = '#999';
        eceranQty.disabled = true;
        
        // Update radio button
        radioKodi.checked = true;
        radioEceran.checked = false;
        
        // Update label colors
        document.querySelector('label[for="radioKodi"]').style.color = '#D97060';
        document.querySelector('label[for="radioEceran"]').style.color = '#999';
        
        kodiQty.focus();
    }
    
    updatePreview();
}

// Update Preview untuk total harga
function updatePreview() {
    const produk = produktData[currentSelected.kategori];
    const tipe = currentSelected.purchaseType;
    
    let total = 0;
    if (tipe === 'eceran') {
        const qty = parseInt(document.getElementById('eceranQty').value) || 1;
        total = produk.hargaEceran * qty;
    } else {
        const qty = parseInt(document.getElementById('kodiQty').value) || 1;
        total = produk.hargaKodi * qty;
    }
    
    document.getElementById('totalPreview').textContent = formatCurrency(total);
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
    
    let qty, satuan, harga;
    
    if (tipe === 'eceran') {
        qty = document.getElementById('eceranQty').value;
        satuan = 'pcs';
        harga = produk.hargaEceran * qty;
    } else {
        qty = document.getElementById('kodiQty').value;
        satuan = 'kodi';
        harga = produk.hargaKodi * qty;
    }
    
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

// Reset Filters
function resetFilters() {
    document.getElementById('kategoriFilter').value = 'all';
    document.getElementById('tinggiCari').value = '';
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
    
    // Tambahkan event listener untuk search dengan debounce
    const tinggiInput = document.getElementById('tinggiCari');
    if (tinggiInput) {
        tinggiInput.addEventListener('input', debounceFilter);
    }
    
    const kategoriSelect = document.getElementById('kategoriFilter');
    if (kategoriSelect) {
        kategoriSelect.addEventListener('change', generateProducts);
    }
});
</script>

@endsection
