# Iterasi 1: Implementasi View Dasar LaraPress

**Tanggal**: Awal Oktober 2025  
**Materi**: Routing dan Views Laravel  
**Status**: ✅ Selesai

---

## 🎯 Tujuan Pembelajaran

Pada iterasi pertama ini, fokus pembelajaran adalah:
1. Memahami konsep routing di Laravel
2. Membuat dan memodifikasi Blade views
3. Menghubungkan route dengan view
4. Struktur dasar aplikasi web

---

## 📋 Tentang LaraPress (Versi Awal)

LaraPress adalah aplikasi blog sederhana yang dibangun menggunakan Laravel 12 untuk tujuan pembelajaran dan pengembangan keterampilan web development. Pada iterasi awal ini, aplikasi masih sangat sederhana dengan 2 halaman statis.

---

## 🚀 Fitur yang Diimplementasikan

### 1. **Halaman Utama (Welcome Page)**
   - Mengubah tampilan default Laravel menjadi halaman sederhana
   - Menampilkan judul "Selamat Datang di LaraPress"
   - Struktur HTML yang bersih dan minimal

### 2. **Halaman Tentang Kami**
   - Route: `/tentang-kami`
   - Menampilkan informasi tentang LaraPress
   - Menjelaskan tujuan proyek sebagai pembelajaran Laravel 12

---

## 📁 Struktur File yang Dibuat/Dimodifikasi

### File yang Dibuat/Dimodifikasi:

1. **`resources/views/welcome.blade.php`**
   - Mengubah tampilan default Laravel yang kompleks (266 baris) menjadi struktur HTML sederhana
   - Menampilkan pesan sambutan untuk pengunjung blog

2. **`resources/views/about.blade.php`** (BARU)
   - File view baru untuk halaman "Tentang Kami"
   - Berisi informasi tentang LaraPress sebagai proyek pembelajaran

3. **`routes/web.php`**
   - Menambahkan route baru `/tentang-kami` yang mengarah ke view `about.blade.php`

---

## 🛠️ Langkah-langkah Implementasi

### Step 1: Modifikasi Halaman Welcome

Mengubah file `resources/views/welcome.blade.php` dari tampilan default Laravel (266 baris) menjadi HTML sederhana:

**File**: `resources/views/welcome.blade.php`
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
</head>
<body>
    <h1>Selamat Datang di Blog LaraPress</h1>
    <p>Ini adalah halaman utama dari aplikasi blog kita.</p>
</body>
</html>
```

**Penjelasan:**
- Struktur HTML5 yang valid
- Meta tag untuk responsive design
- Konten yang sederhana dan jelas
- Bahasa Indonesia (`lang="id"`)

---

### Step 2: Membuat Route Baru

Menambahkan route baru di `routes/web.php`:

**File**: `routes/web.php`
```php
<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tentang Kami
Route::get('/tentang-kami', function () {
    return view('about');
});
```

**Penjelasan:**
- `Route::get()` mendefinisikan route dengan method GET
- Parameter pertama adalah URI path (`'/'` dan `'/tentang-kami'`)
- Closure function mengembalikan view dengan `return view()`
- View name tanpa ekstensi `.blade.php`

---

### Step 3: Membuat View About

Membuat file baru `resources/views/about.blade.php`:

**File**: `resources/views/about.blade.php`
```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
</head>
<body>
    <h1>Tentang LaraPress</h1>
    <p>LaraPress adalah aplikasi blog sederhana yang dibuat dengan Laravel 12.</p>
    <p>Proyek ini dibuat untuk tujuan pembelajaran dan pengembangan keterampilan.</p>
</body>
</html>
```

**Penjelasan:**
- Struktur yang sama dengan welcome.blade.php untuk konsistensi
- Title yang spesifik untuk halaman About
- Konten informatif tentang proyek

---

## 🌐 Endpoint yang Tersedia

| Route | Method | View | Deskripsi |
|-------|--------|------|-----------|
| `/` | GET | welcome.blade.php | Halaman utama LaraPress |
| `/tentang-kami` | GET | about.blade.php | Halaman tentang LaraPress |

---

## 💻 Teknologi yang Digunakan

- **Framework**: Laravel 12
- **PHP Version**: 8.x
- **Database**: SQLite (belum digunakan di iterasi ini)
- **Frontend**: HTML, Blade Template Engine
- **Server**: PHP Built-in Server (`php artisan serve`)

---

## 📦 Cara Menjalankan

### Prerequisites
- PHP 8.x atau lebih tinggi
- Composer
- Git

### Langkah-langkah:

1. **Clone repository:**
```bash
git clone https://github.com/adiwp/project-laravel.git
cd pro1
```

2. **Install dependencies:**
```bash
composer install
```

3. **Setup environment:**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Jalankan development server:**
```bash
php artisan serve
```

5. **Akses aplikasi:**
- Halaman utama: `http://localhost:8000`
- Tentang kami: `http://localhost:8000/tentang-kami`

---

## 📸 Screenshot

### Halaman Utama
![Halaman Utama](screenshot-welcome.png)

Halaman utama menampilkan sambutan sederhana kepada pengunjung blog LaraPress.

---

## 🎓 Konsep Laravel yang Dipelajari

### 1. **Routing**
Routing adalah proses menentukan bagaimana aplikasi merespons request dari client ke URI tertentu.

**Konsep Penting:**
- Route mendefinisikan endpoint aplikasi
- Setiap route bisa dikaitkan dengan controller atau closure
- Route method (GET, POST, PUT, DELETE, dll)

**Contoh:**
```php
Route::get('/path', function () {
    return view('viewname');
});
```

---

### 2. **Views (Blade Template)**
Views adalah file yang berisi HTML yang akan ditampilkan ke user.

**Konsep Penting:**
- Views disimpan di direktori `resources/views/`
- Menggunakan ekstensi `.blade.php`
- Blade adalah template engine Laravel yang powerful
- Bisa menggunakan HTML biasa atau fitur Blade

**Cara Memanggil View:**
```php
return view('welcome'); // resources/views/welcome.blade.php
return view('about');   // resources/views/about.blade.php
```

---

### 3. **MVC Pattern (Bagian V - View)**
Pada iterasi ini, kita baru implementasi bagian **View** dari pattern MVC:

- **Model**: Belum dibuat (iterasi selanjutnya)
- **View**: ✅ welcome.blade.php, about.blade.php
- **Controller**: Belum dibuat (masih menggunakan closure di route)

---

## 🔄 Alur Request-Response

```
┌─────────────┐
│   Browser   │
│  (Client)   │
└──────┬──────┘
       │ 1. HTTP Request: GET /
       ▼
┌─────────────────────────────┐
│    Laravel Application      │
│                             │
│  2. Router (web.php)        │
│     Mencocokkan route       │
│                             │
│  3. Closure/Controller      │
│     return view('welcome')  │
│                             │
│  4. Blade Engine            │
│     Compile welcome.blade   │
│                             │
│  5. HTML Response           │
└──────┬──────────────────────┘
       │ 6. HTTP Response: HTML
       ▼
┌─────────────┐
│   Browser   │
│  (Display)  │
└─────────────┘
```

---

## ✅ Checklist Penyelesaian

### Setup Awal
- [x] Install Laravel 12
- [x] Setup Git repository
- [x] Konfigurasi environment

### Implementasi Views
- [x] Modifikasi welcome.blade.php
- [x] Buat about.blade.php
- [x] Struktur HTML yang valid
- [x] Konten yang informatif

### Routing
- [x] Route untuk halaman utama (`/`)
- [x] Route untuk tentang kami (`/tentang-kami`)
- [x] Route berfungsi dengan baik

### Testing
- [x] Server berjalan tanpa error
- [x] Halaman utama dapat diakses
- [x] Halaman tentang kami dapat diakses
- [x] Tidak ada broken link

### Dokumentasi
- [x] Screenshot halaman utama
- [x] Dokumentasi kode
- [x] README dengan instruksi jelas

---

## 🚀 Rencana Iterasi Selanjutnya

### Iterasi 2: Autentikasi
- [ ] Install Laravel Breeze
- [ ] Implementasi login & register
- [ ] Protected routes dengan middleware
- [ ] User profile management

### Iterasi 3: CRUD Posts
- [ ] Membuat model Post
- [ ] Migration untuk tabel posts
- [ ] Controller untuk CRUD operations
- [ ] Views untuk manage posts

### Iterasi 4: Relasi & Otorisasi
- [ ] Relasi User dan Post
- [ ] Authorization policies
- [ ] User hanya bisa edit post sendiri

---

## 💡 Pembelajaran Penting

### 1. **Kesederhanaan adalah Kunci**
Memulai dengan struktur yang sederhana membantu memahami flow aplikasi Laravel dengan lebih baik.

### 2. **Convention over Configuration**
Laravel menggunakan konvensi penamaan yang konsisten:
- Views di `resources/views/`
- Routes di `routes/web.php`
- Blade templates dengan ekstensi `.blade.php`

### 3. **Incremental Development**
Membangun aplikasi secara bertahap (iteratif) lebih mudah dipahami dan di-maintain.

---

## 📚 Resources

### Dokumentasi Official
- [Laravel 12 Documentation](https://laravel.com/docs/12.x)
- [Routing Documentation](https://laravel.com/docs/12.x/routing)
- [Views Documentation](https://laravel.com/docs/12.x/views)
- [Blade Templates](https://laravel.com/docs/12.x/blade)

### Tutorial & Learning
- [Laracasts](https://laracasts.com) - Video tutorials
- [Laravel News](https://laravel-news.com) - Berita dan tutorial
- [Laravel Daily](https://laraveldaily.com) - Tips harian

---

## 🎯 Kesimpulan Iterasi 1

Pada iterasi pertama ini, kita telah berhasil:
1. ✅ Memahami konsep routing di Laravel
2. ✅ Membuat dan memodifikasi Blade views
3. ✅ Menghubungkan route dengan view
4. ✅ Menjalankan aplikasi Laravel pertama

**Status**: ✅ **COMPLETED**  
**Next**: Implementasi sistem autentikasi dengan Laravel Breeze

---

*Dokumentasi ini adalah bagian dari pembelajaran Laravel untuk proyek LaraPress.*
