# 🧪 Manual Testing Guide - LaraPress Full-Filament

Panduan lengkap untuk melakukan testing manual terhadap semua fitur yang telah diimplementasikan di Praktikum 3.

---

## 📋 Prerequisites

Pastikan:
- ✅ Server Laravel berjalan (`php artisan serve`)
- ✅ Database sudah di-migrate
- ✅ Minimal 1 user admin sudah dibuat
- ✅ Browser modern (Chrome, Firefox, Safari, Edge)

---

## 🧪 Test Case 1: Akses Halaman Utama (Public Access)

### Objective
Memastikan halaman utama dapat diakses tanpa login dan menampilkan konten yang benar.

### Steps
1. Buka browser
2. Akses URL: `http://localhost:8000`
3. Pastikan **tidak login** (gunakan Incognito/Private window jika perlu)

### Expected Results
- ✅ Halaman utama muncul tanpa redirect
- ✅ Custom header terlihat dengan:
  - Logo LaraPress + brand name
  - Link "Beranda" di navigation
  - Tombol "Login" (biru)
  - Tombol "Daftar" (abu-abu)
- ✅ Hero section terlihat dengan:
  - Judul "Selamat Datang di LaraPress"
  - Subtitle tentang blog dan TALL Stack
  - Background gradient biru-ungu
- ✅ 3 Feature cards terlihat:
  - Artikel Berkualitas (ikon buku biru)
  - Komunitas Aktif (ikon users hijau)
  - Modern & Cepat (ikon lightning ungu)
- ✅ Section "Artikel Terbaru" terlihat dengan 2 placeholder articles
- ✅ CTA section di bawah dengan tombol "Login" dan "Daftar Sekarang"
- ✅ Responsive: resize browser, layout tetap bagus

### Screenshot Location
📸 Simpan screenshot sebagai: `docs/praktikum3-homepage-public.png`

---

## 🧪 Test Case 2: Registrasi User Baru

### Objective
Memastikan fitur registrasi Filament berfungsi dan user bisa membuat akun baru.

### Steps
1. Dari halaman utama, klik tombol **"Daftar"** di header
2. URL akan berubah menjadi: `http://localhost:8000/register`
3. Isi form registrasi:
   ```
   Name: Test User
   Email: testuser@larapress.test
   Password: testpass123
   Password Confirmation: testpass123
   ```
4. Klik tombol **"Sign up"**

### Expected Results
- ✅ Form registrasi Filament muncul dengan styling yang bagus
- ✅ Form memiliki validasi:
  - Name required
  - Email required & format valid
  - Password min 8 karakter
  - Password confirmation harus match
- ✅ Setelah submit:
  - User berhasil dibuat di database
  - Auto-login ke aplikasi
  - Redirect ke `/dashboard`
- ✅ Header berubah menampilkan:
  - Nama user "Test User"
  - Email "testuser@larapress.test"
  - Avatar dengan inisial "T"
  - Link "Dashboard" muncul
- ✅ Notification success muncul (opsional, tergantung config)

### Validation Testing
Test juga case error:
- ❌ Submit dengan email yang sudah terdaftar → Error "Email already taken"
- ❌ Submit dengan password < 8 karakter → Error "Password min 8 characters"
- ❌ Submit dengan password tidak match → Error "Password confirmation doesn't match"

### Screenshot Location
📸 `docs/praktikum3-registration.png`

---

## 🧪 Test Case 3: Login dengan Existing User

### Objective
Memastikan fitur login Filament berfungsi dengan kredensial yang benar.

### Steps
1. Logout jika masih login (akses `/logout` atau klik link logout)
2. Klik tombol **"Login"** di header
3. URL akan berubah menjadi: `http://localhost:8000/login`
4. Isi form login:
   ```
   Email: admin1@larapress.test
   Password: password123
   ```
5. Klik tombol **"Sign in"**

### Expected Results
- ✅ Form login Filament muncul dengan:
  - Field Email
  - Field Password
  - Checkbox "Remember me" (opsional)
  - Link "Forgot password?"
  - Link ke halaman Register
- ✅ Setelah submit dengan kredensial benar:
  - Redirect ke `/dashboard`
  - Header menampilkan user profile
  - Dashboard widgets muncul
- ✅ Rate limiting berfungsi:
  - Setelah 5x gagal, muncul error "Too many attempts"

### Failed Login Testing
Test juga case error:
- ❌ Email salah → Error "These credentials do not match"
- ❌ Password salah → Error "These credentials do not match"
- ❌ Email tidak terdaftar → Error "These credentials do not match"

### Screenshot Location
📸 `docs/praktikum3-login.png`

---

## 🧪 Test Case 4: Dashboard & Widgets

### Objective
Memastikan dashboard menampilkan widgets dengan data yang benar.

### Steps
1. Login sebagai user (Test Case 3)
2. Akses URL: `http://localhost:8000/dashboard`

### Expected Results
- ✅ Dashboard page muncul dengan judul "Dashboard"
- ✅ Custom header tetap terlihat
- ✅ StatsOverviewWidget muncul dengan 3 cards:
  
  **Card 1: Total Pengguna**
  - Value: Jumlah user di database (minimal 2: admin + testuser)
  - Description: "Jumlah pengguna terdaftar"
  - Icon: Users (heroicon)
  - Color: Green (success)
  - Mini chart: Sparkline dengan data
  
  **Card 2: Artikel Diterbitkan**
  - Value: 0 (karena belum ada post)
  - Description: "Total artikel yang telah dipublikasikan"
  - Icon: Document (heroicon)
  - Color: Blue (primary)
  - Mini chart: Flat line (semua 0)
  
  **Card 3: Kategori**
  - Value: 0 (karena belum ada category)
  - Description: "Jumlah kategori artikel"
  - Icon: Folder (heroicon)
  - Color: Orange (warning)
  - Mini chart: Flat line (semua 0)

- ✅ AccountWidget (Filament default) juga muncul dengan info user

### Data Verification
```bash
# Check actual user count
php artisan tinker
>>> \App\Models\User::count()
```

### Screenshot Location
📸 `docs/praktikum3-dashboard.png`

---

## 🧪 Test Case 5: Custom Header Consistency

### Objective
Memastikan custom header muncul di semua halaman dengan konten yang konsisten.

### Steps
1. Login sebagai user
2. Navigasi ke berbagai halaman:
   - Halaman Utama: Klik logo/brand name
   - Dashboard: Klik link "Dashboard" di header
   - Profile: Akses `/profile`
3. Perhatikan header di setiap halaman

### Expected Results
- ✅ Header muncul di **semua halaman** tanpa terkecuali
- ✅ Layout header konsisten:
  - Logo & brand name selalu di kiri
  - Navigation links di tengah
  - User profile di kanan
- ✅ Konten header berubah sesuai state:
  
  **When Guest:**
  - ✅ Tombol "Login" terlihat
  - ✅ Tombol "Daftar" terlihat
  - ✅ Link "Dashboard" **tidak** terlihat
  
  **When Authenticated:**
  - ✅ User name terlihat
  - ✅ User email terlihat
  - ✅ Avatar dengan inisial terlihat
  - ✅ Link "Dashboard" terlihat
  - ✅ Tombol "Login" & "Daftar" **tidak** terlihat

- ✅ Hover effects berfungsi:
  - Logo berubah warna saat hover
  - Links berubah warna saat hover
  - Buttons berubah warna saat hover

- ✅ Mobile responsive:
  - Di mobile (<768px), nav collapse
  - Hamburger menu muncul (jika diimplementasi)

### Screenshot Location
📸 `docs/praktikum3-header-authenticated.png`  
📸 `docs/praktikum3-header-guest.png`

---

## 🧪 Test Case 6: Profile Management

### Objective
Memastikan user dapat mengupdate profile mereka.

### Steps
1. Login sebagai user
2. Akses URL: `http://localhost:8000/profile`
3. Lihat form profile yang ter-isi dengan data user
4. Update informasi:
   ```
   Name: Test User Updated
   Email: testupdated@larapress.test
   ```
5. Klik tombol **"Save"**
6. (Opsional) Test password change:
   - Current Password: `testpass123`
   - New Password: `newpass123`
   - Confirm Password: `newpass123`
7. Klik tombol **"Update Password"**

### Expected Results
- ✅ Profile page muncul dengan 2 sections:
  - Profile Information (Name, Email)
  - Update Password
- ✅ Form ter-isi dengan data user saat ini
- ✅ Setelah update profile:
  - Success notification muncul
  - Data tersimpan ke database
  - Header berubah menampilkan nama baru
  - Avatar inisial berubah sesuai nama baru
- ✅ Setelah update password:
  - Success notification muncul
  - Password ter-hash di database
  - Bisa login dengan password baru
  - Tidak bisa login dengan password lama
- ✅ Validasi berfungsi:
  - Email harus unique
  - Email harus format valid
  - Current password harus benar
  - New password min 8 karakter

### Database Verification
```bash
# Check updated user data
php artisan tinker
>>> \App\Models\User::where('email', 'testupdated@larapress.test')->first()
```

### Screenshot Location
📸 `docs/praktikum3-profile.png`

---

## 🧪 Test Case 7: Protected Routes (Middleware)

### Objective
Memastikan halaman yang memerlukan autentikasi tidak bisa diakses oleh guest.

### Steps
1. Logout atau buka Incognito window
2. Coba akses URL protected langsung:
   - `http://localhost:8000/dashboard`
   - `http://localhost:8000/profile`

### Expected Results
- ✅ Tidak bisa akses halaman protected
- ✅ Redirect otomatis ke `/login`
- ✅ Setelah login, redirect kembali ke halaman yang dituju (intended URL)

### Example Flow
```
User (not logged in) → /dashboard
                     ↓
              Redirect to /login
                     ↓
        User login successfully
                     ↓
              Redirect to /dashboard
```

### Screenshot Location
📸 `docs/praktikum3-protected-route.png`

---

## 🧪 Test Case 8: Logout Functionality

### Objective
Memastikan user bisa logout dan session dihapus dengan benar.

### Steps
1. Login sebagai user
2. Akses dashboard untuk memastikan login berhasil
3. Cari menu logout (biasanya di dropdown user profile atau account widget)
4. Klik **"Logout"**

### Expected Results
- ✅ User ter-logout dari aplikasi
- ✅ Session dihapus dari server
- ✅ Redirect ke halaman utama (`/`)
- ✅ Header kembali menampilkan tombol "Login" & "Daftar"
- ✅ Coba akses `/dashboard` → redirect ke `/login`

### Screenshot Location
📸 `docs/praktikum3-logout.png`

---

## 🧪 Test Case 9: Responsive Design

### Objective
Memastikan aplikasi responsive di berbagai ukuran layar.

### Steps
1. Buka aplikasi di desktop browser
2. Buka Developer Tools (F12)
3. Toggle device toolbar (Ctrl+Shift+M)
4. Test di berbagai devices:
   - Mobile: iPhone 12 Pro (390x844)
   - Tablet: iPad (768x1024)
   - Desktop: 1920x1080

### Expected Results

**Mobile (< 768px):**
- ✅ Header stack vertically atau hamburger menu
- ✅ Feature cards stack (1 column)
- ✅ Hero section text size adjust
- ✅ Buttons full-width
- ✅ No horizontal scroll
- ✅ Dashboard widgets stack vertically

**Tablet (768px - 1024px):**
- ✅ Header horizontal dengan collapsed nav (opsional)
- ✅ Feature cards 2 columns (atau 3 columns)
- ✅ Widgets 2 columns
- ✅ Content width appropriate

**Desktop (> 1024px):**
- ✅ Full horizontal layout
- ✅ Feature cards 3 columns
- ✅ Widgets 3 columns
- ✅ Max-width container untuk readability

### Screenshot Location
📸 `docs/praktikum3-responsive-mobile.png`  
📸 `docs/praktikum3-responsive-tablet.png`  
📸 `docs/praktikum3-responsive-desktop.png`

---

## 🧪 Test Case 10: Dark Mode

### Objective
Memastikan dark mode Filament berfungsi dan styling tetap bagus.

### Steps
1. Login sebagai user
2. Cari toggle dark mode (biasanya di topbar atau account menu)
3. Klik toggle untuk enable dark mode
4. Navigasi ke berbagai halaman untuk cek consistency

### Expected Results
- ✅ Dark mode toggle tersedia
- ✅ Setelah toggle, semua halaman berubah ke dark theme:
  - Background: Dark gray/black
  - Text: White/light gray
  - Cards: Darker shade
  - Borders: Subtle gray
- ✅ Custom header styling tetap bagus di dark mode
- ✅ Widgets readable di dark mode
- ✅ Contrast ratio cukup untuk accessibility
- ✅ Preference tersimpan (persist setelah refresh)

### Screenshot Location
📸 `docs/praktikum3-darkmode.png`

---

## 📊 Test Results Summary

| No | Test Case | Status | Notes |
|----|-----------|--------|-------|
| 1 | Akses Halaman Utama | ⏳ Pending | Test setelah deployment |
| 2 | Registrasi User Baru | ⏳ Pending | Test dengan berbagai data |
| 3 | Login Existing User | ⏳ Pending | Test dengan admin & test user |
| 4 | Dashboard & Widgets | ⏳ Pending | Verify data count |
| 5 | Custom Header Consistency | ⏳ Pending | Check di semua halaman |
| 6 | Profile Management | ⏳ Pending | Test update & password change |
| 7 | Protected Routes | ⏳ Pending | Test middleware auth |
| 8 | Logout Functionality | ⏳ Pending | Verify session cleanup |
| 9 | Responsive Design | ⏳ Pending | Test di 3 breakpoints |
| 10 | Dark Mode | ⏳ Pending | Check contrast & readability |

**Total Tests**: 10  
**Passed**: 0  
**Failed**: 0  
**Pending**: 10

---

## 🐛 Bug Reporting Template

Jika menemukan bug saat testing, gunakan template ini:

```markdown
### Bug Title
[Short description of the issue]

**Severity**: Critical / High / Medium / Low

**Steps to Reproduce**:
1. Go to '...'
2. Click on '...'
3. Scroll down to '...'
4. See error

**Expected Behavior**:
[What you expected to happen]

**Actual Behavior**:
[What actually happened]

**Screenshots**:
[If applicable, add screenshots]

**Environment**:
- Browser: Chrome 118
- OS: macOS Sonoma
- Laravel Version: 12.x
- Filament Version: 3.3.42

**Additional Context**:
[Any other context about the problem]
```

---

## ✅ Testing Checklist

Sebelum menandai Praktikum 3 selesai, pastikan:

- [ ] Semua 10 test cases dijalankan
- [ ] Screenshots diambil untuk dokumentasi
- [ ] Bug ditemukan dicatat dan di-report
- [ ] Critical bugs sudah di-fix
- [ ] README.md sudah di-update dengan hasil testing
- [ ] Dokumentasi testing disimpan di `docs/`
- [ ] Code di-commit dengan pesan yang jelas
- [ ] Changes di-push ke repository

---

## 📝 Notes untuk Praktikum 4

Saat testing Praktikum 4 nanti (CRUD Posts), test juga:
- Create post dengan berbagai field
- Edit post existing
- Delete post
- View post di homepage
- Filter posts by category
- Search posts
- Upload featured image
- Slug auto-generation
- Rich text editor functionality

---

**Happy Testing! 🎉**

*Last Updated: 3 Oktober 2025*
