# Laravel Project Structure - Company Profile Website

## ✅ Struktur File Sudah Diupdate

Sekarang aplikasi Anda menggunakan struktur Laravel yang proper dengan:

### 📁 File Structure

```
resources/views/
├── layouts/
│   └── app.blade.php          ← Master Layout (HTML Head, Scripts)
├── partials/
│   ├── navbar.blade.php       ← Navigation Component
│   └── footer.blade.php       ← Footer Component
└── home.blade.php             ← Home Page (Extends layout/app.blade.php)

app/Http/Controllers/
└── HomeController.php         ← Controller that sends data to home.blade.php

routes/
└── web.php                    ← Define routes here
```

---

## 🔄 Bagaimana Cara Kerjanya

### 1. **routes/web.php** - Define Routes
```php
Route::get('/', [HomeController::class, 'index'])->name('home');
```

### 2. **HomeController.php** - Business Logic
- Menyiapkan semua data Anda (services, destinations, testimonials, dll)
- Mengirim data ke view dengan `compact()`

```php
return view('home', compact('services', 'destinations', ...));
```

### 3. **Blade Templates** - Display Data
- `layouts/app.blade.php` - Master layout dengan structure HTML
- `partials/navbar.blade.php` - Navigation bar
- `partials/footer.blade.php` - Footer
- `home.blade.php` - Content utama yang extends dari app.blade.php

---

## 📝 Menggunakan Data Dinamis di View

Dalam `home.blade.php` Anda bisa menggunakan Blade Syntax:

### 1. **If Statement**
```blade
@if($servicesTitle)
    <h3>{{ $servicesTitle }}</h3>
@endif
```

### 2. **Loops**
```blade
@forelse($services as $service)
    <div>
        <h4>{{ $service['title'] }}</h4>
        <p>{{ $service['description'] }}</p>
    </div>
@empty
    <p>No services available</p>
@endforelse
```

### 3. **Asset Helper**
```blade
<img src="{{ asset('assets/img/logo.svg') }}" alt="Logo" />
```

### 4. **Default Values (Null Coalescing)**
```blade
<h1>{{ $heroTitle ?? 'Default Title' }}</h1>
```

---

## 🚀 Menjalankan Aplikasi

### 1. Start Development Server
```bash
php artisan serve
```
Aplikasi akan berjalan di: **http://localhost:8000**

### 2. Build Assets
```bash
npm run dev      # Development watch mode
npm run build    # Production build
```

---

## 📊 Struktur Data di HomeController

Semua data dari database atau API akan diset di controller:

```php
public function index()
{
    $services = [
        [
            'icon' => 'assets/img/category/icon1.png',
            'title' => 'Calculated Weather',
            'description' => 'Built Wicket longer admire...'
        ],
        // More items...
    ];

    return view('home', compact('services'));
}
```

---

## 🔗 Mengubah Data di Controller

### Dari Static Array ke Database

```php
// Sebelumnya (Static)
$services = [
    ['title' => 'Service 1', ...],
];

// Sesudahnya (Database)
$services = Service::all(); // atau Service::all()->toArray()
```

---

## 📌 Keuntungan Struktur Baru

✅ Separasi Concerns - Controller, View, Layout terpisah  
✅ Reusable Partials - navbar & footer bisa digunakan di semua halaman  
✅ Dynamic Data - Mudah mengubah data dari database  
✅ Clean Code - HTML lebih rapi dengan Blade syntax  
✅ Maintenance - Lebih mudah di-maintain dan di-scale  

---

## 🎯 Langkah Selanjutnya

### 1. Buat Halaman Lain
```bash
# Buat controller baru
php artisan make:controller AboutController

# Edit routes/web.php
Route::get('/about', [AboutController::class, 'index'])->name('about');

# Buat resources/views/about.blade.php
```

### 2. Buat Model & Database
```bash
# Buat model
php artisan make:model Service

# Buat migration
php artisan make:migration create_services_table

# Jalankan migration
php artisan migrate
```

### 3. Fetch Data dari Database
```php
// Di HomeController
$services = \App\Models\Service::all();
```

---

## 💡 Tips

- Semua view di `resources/views/` dapat mengakses variable dari controller
- Gunakan `{{ }}` untuk echo data (di-escape untuk security)
- Gunakan `{!! !!}` untuk raw HTML (hati-hati!)
- Gunakan `@php` untuk PHP logic di view (minimal)
- Selalu gunakan `asset()` helper untuk path ke file public

---

## 🐛 Troubleshooting

### View not found
```
ViewException: View [home] not found in path...
```
**Solusi**: Pastikan file `resources/views/home.blade.php` ada

### Controller not found
```
ClassNotFoundException: Class doesn't exist...
```
**Solusi**: Jalankan `php artisan make:controller HomeController --resource`

### Route not working
```
Route [home] not defined
```
**Solusi**: Tambah `->name('home')` di route definition

---

✨ **Sekarang struktur Laravel Anda sudah proper dan siap untuk development!**
