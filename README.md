# WD05-System Kesehatan

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

## 📋 Deskripsi Proyek

Proyek ini merupakan sistem informasi kesehatan yang dikembangkan menggunakan framework Laravel. Sistem ini dirancang untuk memudahkan pengelolaan data kesehatan, menyediakan antarmuka yang user-friendly, dan mengintegrasikan berbagai aspek layanan kesehatan dalam satu platform.

> **Catatan:** Proyek ini masih dalam tahap awal pengembangan, saat ini baru menyelesaikan setup dasar Laravel.

## 🚀 Setup & Instalasi

Berikut adalah langkah-langkah yang telah dilakukan untuk mengatur proyek ini:

### Prasyarat

- [XAMPP](https://www.apachefriends.org/download.html) (PHP 8.1+ dengan MySQL)
- [Composer](https://getcomposer.org/download/)
- [Node.js & NPM](https://nodejs.org/en/download/) (untuk asset build)

### Langkah Instalasi

1. **Instal XAMPP**
   - Download dan install XAMPP dengan PHP versi 8.1 atau lebih tinggi
   - Pastikan server Apache dan MySQL berjalan dengan baik

2. **Instal Composer**
   - Download dan install Composer sebagai dependency manager untuk PHP

3. **Instal Laravel Installer**
   ```bash
   composer global require laravel/installer
   ```

4. **Buat Proyek Laravel Baru**
   ```bash
   laravel new WD05-system-kesehatan
   ```
   - Pilih opsi "None" untuk starter kits
   - Konfigurasikan database dan preferensi lainnya

5. **Masuk ke direktori proyek**
   ```bash
   cd WD05-system-kesehatan
   ```

6. **Install dependencies JavaScript dan build assets**
   ```bash
   npm install && npm run build
   ```

7. **Jalankan server pengembangan**
   ```bash
   php artisan serve
   ```

8. Akses aplikasi di [http://localhost:8000](http://localhost:8000)

## 🛠️ Teknologi yang Digunakan

- **[Laravel 10.x](https://laravel.com/)** - Framework PHP
- **[MySQL](https://www.mysql.com/)** - Database Management System
- **[Tailwind CSS](https://tailwindcss.com/)** - Utility-first CSS framework
- **[Alpine.js](https://alpinejs.dev/)** - JavaScript framework untuk interaksi
- **[Vite](https://vitejs.dev/)** - Build tool dan development server

## 📂 Struktur Proyek

```
WD05-system-kesehatan/
├── app/                      # Core application code
├── bootstrap/                # App bootstrapping
├── config/                   # Configuration files
├── database/                 # Database migrations & seeders
├── public/                   # Publicly accessible files
├── resources/                # Views and uncompiled assets
├── routes/                   # Application routes
├── storage/                  # Application storage
├── tests/                    # Automated tests
├── vendor/                   # Composer dependencies
└── ...
```

## 🔍 Fitur yang Direncanakan

- [ ] Autentikasi Pengguna
- [ ] Dashboard Admin
- [ ] Manajemen Pasien
- [ ] Manajemen Dokter
- [ ] Penjadwalan Konsultasi
- [ ] Rekam Medis Digital
- [ ] Sistem Pembayaran
- [ ] Laporan & Analitik

## 📚 Sumber Belajar Laravel

- [Dokumentasi Laravel](https://laravel.com/docs)
- [Laracasts](https://laracasts.com)
- [Laravel News](https://laravel-news.com/)
- [Laravel Podcast](https://laravelpodcast.com/)

## 📝 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## 👨‍💻 Pengembang

- Student ID: A11.2022.14393

---

<p align="center">
  <sub>Dibuat dengan ❤️ menggunakan Laravel</sub>
</p>
