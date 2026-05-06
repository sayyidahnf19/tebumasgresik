# Panduan Deployment Tebu Mas Gresik ke Vercel

## 🎯 Konfigurasi yang Telah Diperbaiki

### 1. **vite.config.js** - Build Configuration
✅ **Diperbaiki**: Menambahkan `base` path untuk production
```javascript
base: process.env.NODE_ENV === 'production' ? '/build/' : '/',
```
**Fungsi**: Memastikan Vite menghasilkan asset paths yang benar untuk `/build/` directory di Vercel.

---

### 2. **vercel.json** - Static Asset Routes
✅ **Diperbaiki**: Menambahkan routes khusus untuk CSS, JS, dan Images
```json
{
  "routes": [
    {
      "src": "/build/(.*)",
      "dest": "/build/$1",
      "headers": {
        "cache-control": "public, max-age=31536000, immutable"
      }
    },
    {
      "src": "/css/(.*)",
      "dest": "/css/$1",
      "headers": {
        "cache-control": "public, max-age=31536000"
      }
    },
    {
      "src": "/js/(.*)",
      "dest": "/js/$1",
      "headers": {
        "cache-control": "public, max-age=31536000"
      }
    },
    {
      "src": "/img/(.*)",
      "dest": "/img/$1",
      "headers": {
        "cache-control": "public, max-age=31536000"
      }
    }
  ]
}
```
**Fungsi**: Menginstruksikan Vercel untuk serve static files dengan cache headers yang optimal.

---

### 3. **.env.production** - Environment Configuration
✅ **Sudah Tersetel**: Environment variables untuk production
```env
APP_NAME="Tebu Mas Gresik"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tebumasgresik.vercel.app
LOG_CHANNEL=stderr
```
**Fungsi**: 
- `APP_URL` digunakan oleh Laravel `asset()` helper untuk generate URLs
- `APP_DEBUG=false` untuk security di production
- `LOG_CHANNEL=stderr` untuk Vercel logging

---

### 4. **resources/views/layouts/app.blade.php** - Asset Links
✅ **Diperbaiki**: Menambahkan cache busting query parameters
```blade
<link href="{{ asset('css/theme.css') }}?v=1" rel="stylesheet" />
<script src="{{ asset('js/theme.js') }}?v=1"></script>
```
**Fungsi**: Memastikan browser tidak cache versi lama dari asset files.

---

## 📁 Struktur File Assets

Vercel akan serve file-file berikut dari `public` directory:

```
public/
├── build/
│   ├── manifest.json        ← Vite build manifest
│   └── assets/              ← Compiled assets dari Vite
├── css/                     ← Static CSS files
│   ├── theme.css
│   ├── responsive.css
│   ├── slider.css
│   └── ...
├── js/                      ← Static JavaScript files
│   ├── theme.js
│   ├── bootstrap-navbar.js
│   └── ...
└── img/                     ← Image files
    ├── hero/
    ├── category/
    ├── favicons/
    └── ...
```

---

## 🚀 Cara Deploy ke Vercel

### Step 1: Siapkan Repository
```bash
git add .
git commit -m "Fix Vercel asset paths for CSS, JS, and images"
git push origin main
```

### Step 2: Connect ke Vercel
1. Buka https://vercel.com
2. Click "New Project"
3. Import repository GitHub Anda
4. Framework: **Other** (karena menggunakan Laravel)
5. Root Directory: `.` (root folder)

### Step 3: Environment Variables
Set environment variables di Vercel dashboard:

| Variable | Value |
|----------|-------|
| `APP_KEY` | `base64:CVIJ+3UwidQmUq3Weo91k7B8ZoZGQoj8/5ppMLmSlw0=` |
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `APP_URL` | `https://tebumasgresik.vercel.app` |

### Step 4: Build & Deploy Settings
- **Build Command**: `npm run build`
- **Output Directory**: `public`
- **Install Command**: `composer install && npm install`

---

## ✅ Verifikasi Deployment

Setelah deployment selesai, verifikasi dengan curl:

```bash
# CSS Files
curl -I https://tebumasgresik.vercel.app/css/theme.css

# JS Files  
curl -I https://tebumasgresik.vercel.app/js/theme.js

# Images
curl -I https://tebumasgresik.vercel.app/img/hero/hero-bg.svg

# Vite Build Assets
curl -I https://tebumasgresik.vercel.app/build/assets/app-xxxxx.js
```

Semua response harus `200 OK` dengan Content-Type yang benar:
- CSS: `text/css`
- JS: `application/javascript`
- Images: `image/*`

---

## 🔍 Path Resolution Examples

### Bagaimana Laravel `asset()` Helper Bekerja di Vercel

```blade
{{ asset('css/theme.css') }}
```

Akan di-generate menjadi:
```
https://tebumasgresik.vercel.app/css/theme.css
```

Karena:
1. `APP_URL` = `https://tebumasgresik.vercel.app` (dari .env.production)
2. `asset()` helper menambahkan path ke APP_URL
3. vercel.json routes mengarahkan `/css/*` ke `public/css/*`

---

## 🐛 Troubleshooting

### Masalah: CSS/JS tidak loading (404 errors)

**Solusi**:
1. Verifikasi vercel.json routes sudah benar (sudah dibuat ✅)
2. Pastikan public directory berisi file CSS/JS/img (sudah verify ✅)
3. Check Vercel deployment logs untuk error details

### Masalah: Asset cache issues

**Solusi**:
- Clear browser cache atau hard refresh (Ctrl+Shift+R)
- Query parameter `?v=1` di app.blade.php sudah ditambahkan
- Cache headers di vercel.json sudah di-optimize

### Masalah: Image tidak muncul

**Solusi**:
1. Verifikasi `{{ asset('img/path/to/image.png') }}` syntax di Blade file
2. Cek file benar-benar ada di `public/img/` directory
3. Pastikan vercel.json `/img/(.*)` route sudah correct

---

## 📝 File-file yang Diubah

✅ **vite.config.js** - Ditambahkan base path configuration
✅ **vercel.json** - Ditambahkan static asset routes
✅ **resources/views/layouts/app.blade.php** - Ditambahkan cache busting params
✅ **.env.production** - Verified APP_URL untuk Vercel domain

---

## 💡 Tips Production

1. **Verifikasi APP_URL** - Ganti `tebumasgresik.vercel.app` dengan domain Vercel Anda yang actual
2. **Production Mode** - APP_DEBUG harus `false` di production
3. **Cache Busting** - Query params (`?v=1`) dapat di-update jika asset berubah
4. **Security** - Jangan commit sensitive files (.env.production bisa di-gitignore)

---

## 📞 Support

Jika ada masalah saat deployment:

1. Check Vercel deployment logs: Dashboard → Project → Deployments
2. Check browser console untuk JavaScript errors (F12)
3. Verify domain sudah properly configured di Vercel
4. Ensure repository sudah di-push dengan semua changes

---

**Last Updated**: May 2026
**Status**: ✅ Ready for Vercel Deployment
