# Panduan Deploy ke Vercel untuk Tebu Mas Gresik

## File-file yang telah dibuat/dikonfigurasi:

### 1. `vercel.json` - Konfigurasi Vercel
- Mengatur build command untuk menjalankan Composer, NPM, dan Vite build
- Menyimpan assets di folder `public/build` (Vite output)
- Routing semua request ke `api/index.php` (Laravel entry point)
- Output directory: `public` (standard Laravel)

### 2. `api/index.php` - Serverless Function Entry Point
- File entry point untuk Vercel Serverless Functions
- Merutekan semua request ke Bootstrap Laravel

### 3. `.env.production` - Environment Configuration
- Konfigurasi untuk production environment
- Harus di-update dengan nilai yang sesuai (APP_KEY, APP_URL, DB credentials, dll)

## ⚠️ LANGKAH YANG HARUS ANDA LAKUKAN:

### 1. Generate APP_KEY untuk .env.production
```bash
php artisan key:generate --env=production
```
Salin hasilnya ke file `.env.production` di baris `APP_KEY=`

### 2. Update `.env.production` dengan nilai sebenarnya:
- **APP_URL**: Ubah ke URL domain Anda yang akan di-deploy
  ```
  APP_URL=https://tebumasgresik.vercel.app  # atau domain custom Anda
  ```
- **Database**: Jika menggunakan database, konfigurasi koneksi yang benar
  ```
  DB_CONNECTION=mysql
  DB_HOST=your-db-host
  DB_DATABASE=your-db-name
  DB_USERNAME=your-db-user
  DB_PASSWORD=your-db-password
  ```

### 3. Push ke Git dan Deploy di Vercel:
```bash
git add .
git commit -m "Add Vercel configuration"
git push
```

Kemudian di Vercel Dashboard:
- Connect repository Anda
- Vercel akan otomatis detect `vercel.json`
- Klik Deploy

### 4. Konfigurasi di Vercel Dashboard (jika diperlukan):
- **Build Command**: Sudah di-set di vercel.json
- **Output Directory**: Sudah di-set ke `public`
- **Install Command**: Sudah di-set di vercel.json
- **Environment Variables**: Bisa di-override di Settings → Environment Variables

## 📋 Checklist sebelum deploy:

- [ ] Update APP_KEY di `.env.production`
- [ ] Update APP_URL di `.env.production`
- [ ] Update database credentials (jika ada)
- [ ] Commit dan push semua file baru
- [ ] Verifikasi `vercel.json`, `api/index.php`, dan `.env.production` sudah ada
- [ ] Deploy di Vercel Dashboard

## 🔧 Troubleshooting:

**Error: "No Output Directory named 'dist' found"**
- ✅ Sudah diperbaiki dengan mengatur `outputDirectory` ke `public` di vercel.json

**Build timeout atau error**
- Cek logs di Vercel Dashboard
- Pastikan semua dependencies terpasang dengan baik
- Verifikasi PHP 8.2 kompatibel dengan kode Anda

**Database connection error**
- Pastikan database credentials di `.env.production` benar
- Gunakan service seperti PlanetScale (MySQL) atau Vercel Postgres

**Static assets tidak muncul**
- Routes di vercel.json sudah di-konfigurasi untuk melayani `/build/.*`
- Pastikan Vite build berhasil dengan file di `public/build/`

---

**Need help?** Check the Vercel Laravel docs:
https://vercel.com/docs/frameworks/laravel
