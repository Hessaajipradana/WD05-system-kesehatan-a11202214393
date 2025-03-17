<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# WD05-system-kesehatan-a11202214393

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-Apache-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

## 📋 Deskripsi Proyek

Proyek ini bertujuan untuk mengembangkan sebuah sistem manajemen kesehatan online yang memungkinkan interaksi yang efisien antara pasien dan dokter melalui platform digital. Dengan meningkatnya kebutuhan akan layanan kesehatan yang mudah diakses dan terorganisir, sistem ini dirancang untuk menyederhanakan proses pendaftaran, penjadwalan, dan manajemen perawatan kesehatan.

Platform ini akan menjadi solusi terintegrasi yang memudahkan pasien dalam mengakses layanan kesehatan dan membantu dokter dalam mengelola informasi pasien serta persediaan obat.

## 🚀 Status Proyek

Status saat ini: **Setup awal Laravel selesai ✅**

Sesuai penugasan pertama, telah melakukan:
- ✅ Instalasi Composer
- ✅ Instalasi Laravel menggunakan Composer
- ✅ Instalasi web server (XAMPP)
- ✅ Pembuatan repository GitHub
- ✅ Push project Laravel ke repository GitHub

## 👤 User Stories

### Pasien
1. **Register** - Sebagai seorang pasien baru, saya ingin mendaftar ke sistem dengan mengisi nama, alamat, dan nomor handphone, agar saya dapat menggunakan layanan kesehatan.
2. **Login** - Sebagai seorang pasien, saya ingin masuk ke sistem menggunakan informasi login saya, agar saya dapat mengakses layanan kesehatan.
3. **Periksa** - Sebagai seorang pasien, saya ingin membuat janji periksa dengan dokter, agar saya dapat mendapatkan diagnosis dan pengobatan.

### Dokter
1. **Login** - Sebagai seorang dokter, saya ingin masuk ke sistem menggunakan informasi login saya, agar saya dapat mengakses layanan kesehatan.
2. **Memeriksa** - Sebagai seorang dokter, saya ingin mencatat hasil pemeriksaan pasien, termasuk catatan medis dan biaya pemeriksaan (biaya statis 150.000 + biaya obat yang dipilih), agar pasien dapat mendapatkan perawatan yang tepat.
3. **CRUD Obat** - Sebagai seorang dokter, saya ingin menambah, melihat, mengubah, dan menghapus informasi obat (nama obat, kemasan, harga), agar saya dapat mengelola persediaan obat dengan efektif.

## 🛠️ Setup & Instalasi

### Prasyarat

- [XAMPP](https://www.apachefriends.org/download.html) (PHP 8.2+)
- [Composer](https://getcomposer.org/download/)
- [Node.js & NPM](https://nodejs.org/en/download/) (untuk asset build)

### Langkah Instalasi

1. **Instal XAMPP**
   - Download dan install XAMPP dengan PHP versi 8.2 atau lebih tinggi
   - Pastikan server Apache dan MySQL berjalan dengan baik

2. **Instal Composer**
   ```bash
   # Download dan ikuti panduan instalasi Composer
   ```

3. **Instal Laravel Installer**
   ```bash
   composer global require laravel/installer
   ```

4. **Buat Proyek Laravel Baru**
   ```bash
   laravel new WD05-system-kesehatan
   ```
   - Pilih opsi "None" untuk starter kits

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

## 📂 Struktur Database

Sistem ini menggunakan model database dengan entitas utama:
- **Pasien** - Menyimpan data pasien
- **Dokter** - Menyimpan data dokter
- **Obat** - Menyimpan informasi tentang obat
- **Pemeriksaan** - Menyimpan catatan pemeriksaan
- **Detail Pemeriksaan** - Menyimpan detail obat yang digunakan dalam pemeriksaan

## ⚙️ Teknologi yang Digunakan

- **[Laravel](https://laravel.com/)** - Framework PHP
- **[MySQL](https://www.mysql.com/)** - Database Management System
- **[XAMPP](https://www.apachefriends.org/index.html)** - PHP development environment
- **[Composer](https://getcomposer.org/)** - Dependency Manager untuk PHP
- **[GitHub](https://github.com/)** - Version Control

## 📝 To-Do List

- [x] Setup project Laravel
- [x] Push ke repository GitHub
- [ ] Implementasi registrasi pasien
- [ ] Implementasi login
- [ ] Implementasi pembuatan janji periksa
- [ ] Implementasi CRUD obat
- [ ] Implementasi pencatatan hasil pemeriksaan

## 👨‍💻 Pengembang

- NIM: A11.2022.14393
- Kelas: WD05

---

<p align="center">
  <sub>Dibuat untuk memenuhi tugas Bengkel Koding 2025</sub>
</p>
