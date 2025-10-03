# 🚀 Quick Start Guide - LaraPress

Panduan cepat untuk menjalankan LaraPress di mesin lokal Anda.

## Prerequisites

Pastikan Anda sudah menginstall:

- ✅ **PHP 8.2+** dengan extensions:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON
  - BCMath
  - Fileinfo
  - GD

- ✅ **Composer** (Dependency Manager untuk PHP)
- ✅ **Node.js & NPM** (untuk build frontend assets)
- ✅ **Git** (untuk version control)

## Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/adiwp/project-laravel.git larapress
cd larapress
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Setup Environment
```bash
# Copy file .env example
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Setup Database
```bash
# Jalankan migrasi database
php artisan migrate

# (Opsional) Seed database dengan data dummy
php artisan db:seed
```

### 6. Build Frontend Assets
```bash
# Development mode
npm run dev

# Atau build untuk production
npm run build
```

### 7. Jalankan Server
```bash
php artisan serve
```

Aplikasi akan berjalan di: **http://localhost:8000**

---

## Login ke Aplikasi

### Akun Admin
- Email: `admin1@larapress.test`
- Password: `password123`

### Registrasi User Baru
Klik tombol **"Daftar"** di halaman utama untuk membuat akun baru.

---

## Development Workflow

### Terminal 1: Laravel Server
```bash
php artisan serve
```

### Terminal 2: Frontend Build (Watch Mode)
```bash
npm run dev
```

### Akses Aplikasi
- **Homepage**: http://localhost:8000
- **Login**: http://localhost:8000/login
- **Register**: http://localhost:8000/register
- **Dashboard**: http://localhost:8000/dashboard (setelah login)

---

## Troubleshooting

### Error: "Please provide a valid cache path"
```bash
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
chmod -R 775 storage bootstrap/cache
```

### Error: "No application encryption key has been specified"
```bash
php artisan key:generate
```

### Error: "Failed to clear cache"
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

### Filament Assets tidak muncul
```bash
php artisan filament:optimize
```

### Database tidak tersedia
```bash
# Pastikan file database.sqlite ada
touch database/database.sqlite

# Jalankan migrasi ulang
php artisan migrate:fresh --seed
```

---

## Struktur Direktori Penting

```
larapress/
├── app/
│   ├── Filament/
│   │   ├── Pages/          # Custom Pages
│   │   ├── Resources/      # CRUD Resources
│   │   └── Widgets/        # Dashboard Widgets
│   ├── Models/             # Eloquent Models
│   └── Providers/
│       └── Filament/       # Panel Providers
├── database/
│   ├── migrations/         # Database Migrations
│   └── seeders/            # Database Seeders
├── resources/
│   └── views/
│       └── filament/       # Filament Views
├── routes/
│   └── web.php             # Web Routes
└── public/                 # Public Assets
```

---

## Perintah Artisan Berguna

### General
```bash
# Clear all cache
php artisan optimize:clear

# Optimize aplikasi untuk production
php artisan optimize

# Lihat semua routes
php artisan route:list
```

### Database
```bash
# Migrasi database
php artisan migrate

# Rollback migrasi terakhir
php artisan migrate:rollback

# Reset database dan seed ulang
php artisan migrate:fresh --seed
```

### Filament
```bash
# Buat user Filament baru
php artisan make:filament-user

# Buat Resource baru
php artisan make:filament-resource Post

# Buat Page baru
php artisan make:filament-page AboutPage

# Buat Widget baru
php artisan make:filament-widget StatsWidget --stats-overview

# Optimize Filament
php artisan filament:optimize
```

---

## Tips untuk Development

### 1. Enable Debug Mode
Di `.env`:
```
APP_DEBUG=true
APP_ENV=local
```

### 2. Database GUI
Install Filament Shield untuk database management:
```bash
composer require bezhansalleh/filament-shield
```

### 3. Hot Reload Frontend
Saat development, gunakan:
```bash
npm run dev
```
Frontend akan auto-reload saat ada perubahan.

### 4. Git Workflow
```bash
# Commit perubahan
git add .
git commit -m "feat: menambahkan fitur X"

# Push ke repository
git push origin main
```

---

## Production Deployment

### 1. Environment Setup
```bash
# Set production environment
APP_ENV=production
APP_DEBUG=false

# Generate secure key
php artisan key:generate
```

### 2. Optimize Aplikasi
```bash
# Cache config, routes, views
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

### 3. Build Assets
```bash
npm run build
```

### 4. Set Permissions
```bash
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

## Support & Dokumentasi

- 📖 **Dokumentasi Praktikum**: Lihat folder `docs/`
- 🐛 **Report Issues**: [GitHub Issues](https://github.com/adiwp/project-laravel/issues)
- 💬 **Diskusi**: [GitHub Discussions](https://github.com/adiwp/project-laravel/discussions)
- 📚 **Laravel Docs**: https://laravel.com/docs
- 🎨 **Filament Docs**: https://filamentphp.com/docs

---

**Happy Coding! 🎉**
