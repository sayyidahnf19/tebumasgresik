# Setup Laravel - Company Profile Website

## ✅ Instalasi Selesai

Tanggal: 31 Maret 2026  
Framework: Laravel 12.56.0  
PHP Version: 8.2.12  
Node.js Version: v20.13.1  
Composer Version: 2.7.6

---

## 📦 Dependencies Terinstall

### PHP Dependencies (Composer)
- ✓ laravel/framework v12.56.0
- ✓ laravel/tinker v2.11.1
- ✓ fakerphp/faker v1.24.1
- ✓ phpunit/phpunit v11.5.55
- ✓ Dan 83+ packages lainnya

### JavaScript Dependencies (NPM)
- ✓ 83 packages installed
- ✓ 0 vulnerabilities

---

## 🚀 Memulai Development

### 1. Start Development Server
```bash
php artisan serve
```
Aplikasi akan berjalan di: `http://localhost:8000`

### 2. Build Assets untuk Development
```bash
npm run dev
```

### 3. Build Assets untuk Production
```bash
npm run build
```

---

## 📁 Struktur Folder Project

```
songkok/
├── app/                  # Folder aplikasi (Controllers, Models, dll)
├── bootstrap/            # File bootstrap Laravel
├── config/               # File konfigurasi
├── database/             # Database migrations & seeders
├── public/               # Folder public (CSS, JS, images)
├── resources/            # Views, CSS, JS sources
│   ├── views/           # Blade templates
│   ├── css/             # CSS files
│   └── js/              # JavaScript files
├── routes/               # Route definitions
│   └── web.php          # Web routes
├── storage/              # Storage untuk logs & cache
├── tests/                # Unit tests
├── vendor/               # Composer dependencies
├── node_modules/         # NPM dependencies
├── composer.json         # PHP dependencies
├── package.json          # JavaScript dependencies
├── .env                  # Environment variables
└── artisan              # Laravel CLI tool
```

---

## 🔑 Konfigurasi Penting

### File `.env`
- `APP_NAME` = Nama Aplikasi
- `APP_ENV` = local (development) atau production
- `APP_DEBUG` = true (development) atau false (production)
- `APP_URL` = URL aplikasi
- `DB_*` = Database configuration (lepas saat Anda siap menggunakan database)

---

## 💻 Perintah Artisan Penting

```bash
# Jalankan development server
php artisan serve

# Check status aplikasi
php artisan tinker

# Jalankan migrations database
php artisan migrate

# Buat controller baru
php artisan make:controller NameController

# Buat model baru
php artisan make:model ModelName

# Jalankan tests
php artisan test

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

## 📝 Langkah Selanjutnya untuk Company Profile Website

### 1. Setup Routes (routes/web.php)
```php
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
```

### 2. Buat Controllers
```bash
php artisan make:controller HomeController
php artisan make:controller AboutController
php artisan make:controller ServiceController
php artisan make:controller ContactController
```

### 3. Buat Views
- resources/views/layout.blade.php (layout utama)
- resources/views/home.blade.php
- resources/views/about.blade.php
- resources/views/services.blade.php
- resources/views/contact.blade.php

### 4. Setup Database (optional)
```bash
php artisan migrate
```

---

## 📚 Dokumentasi Referensi

- **Laravel Official**: https://laravel.com/docs/12.x
- **Blade Templates**: https://laravel.com/docs/12.x/blade
- **Routing**: https://laravel.com/docs/12.x/routing
- **Controllers**: https://laravel.com/docs/12.x/controllers

---

## ⚙️ Troubleshooting

### Masalah: "Class not found"
```bash
php artisan config:clear
composer dump-autoload
```

### Masalah: npm build error
```bash
rm -r node_modules package-lock.json
npm install
npm run build
```

### Masalah: Permission denied
Jalankan terminal sebagai Administrator

---

## 🎉 Setup Lengkap!

Semua dependencies sudah terinstall dan siap untuk development.  
Silakan mulai buat company profile website Anda! 

Happy Coding! 🚀
