# SISTEM INFORMASI REKOMENDASI RUANGAN PERKULIAHAN (SIAP)

## Identitas Pengembang

- Nama: Aninda Ainunnisa
- NIM: C2483207028
- Program Studi: S1 Pendidikan Teknologi Informasi
- Kelas: PTI 5

## Tema Proyek

Tema 5 – Sistem Rekomendasi Ruangan Perkuliahan

## Deskripsi Aplikasi

SIAP (Sistem Informasi Rekomendasi Ruangan Perkuliahan) merupakan aplikasi berbasis web yang dikembangkan menggunakan framework Laravel. Aplikasi ini bertujuan membantu pengguna menemukan ruangan perkuliahan yang sesuai berdasarkan jumlah mahasiswa, fasilitas yang dibutuhkan, hari, dan waktu penggunaan.

Aplikasi menggunakan data berbasis array PHP tanpa menggunakan database.

## Fitur Aplikasi

1. Dashboard untuk menampilkan informasi jumlah ruangan dan jadwal.
2. Data ruangan yang menampilkan informasi nama, gedung, kapasitas, dan fasilitas.
3. Data jadwal perkuliahan.
4. Form pencarian rekomendasi ruangan.
5. Pemeriksaan kapasitas ruangan berdasarkan jumlah mahasiswa.
6. Pemeriksaan kelengkapan fasilitas.
7. Pemeriksaan bentrok jadwal berdasarkan hari dan waktu.
8. Pengurutan rekomendasi berdasarkan selisih kapasitas terkecil.
9. Halaman informasi tentang aplikasi.

## Implementasi Laravel

### 1. Routing
Aplikasi menggunakan minimal 7 route untuk menghubungkan URL dengan controller dan halaman Blade.

### 2. Controller
Aplikasi menggunakan tiga controller:
- DashboardController
- RuanganController
- RekomendasiController

Seluruh proses pengolahan data dan logika rekomendasi dilakukan di bagian Controller.

### 3. Blade View
Aplikasi menggunakan enam halaman Blade:
- dashboard.blade.php
- ruangan.blade.php
- jadwal.blade.php
- rekomendasi/index.blade.php
- rekomendasi/hasil.blade.php
- tentang.blade.php

## Algoritma Rekomendasi

Proses rekomendasi dilakukan melalui beberapa tahapan:

1. Pengguna memasukkan jumlah mahasiswa, hari, jam mulai, jam selesai, dan fasilitas yang dibutuhkan.
2. Sistem memeriksa kapasitas setiap ruangan.
3. Sistem memeriksa apakah fasilitas ruangan sesuai dengan kebutuhan.
4. Sistem memeriksa bentrok jadwal penggunaan ruangan.
5. Ruangan yang memenuhi seluruh kriteria dimasukkan ke daftar rekomendasi.
6. Sistem menghitung selisih kapasitas ruangan dengan jumlah mahasiswa.
7. Hasil rekomendasi diurutkan berdasarkan selisih kapasitas terkecil.

Jika tidak terdapat ruangan yang memenuhi kriteria, sistem menampilkan informasi bahwa rekomendasi tidak ditemukan.

## Data Aplikasi

- Jumlah data ruangan: 15 ruangan.
- Jumlah data jadwal: 10 jadwal.
- Penyimpanan data: Array PHP.
- Database: Tidak menggunakan database.

## Cara Menjalankan Aplikasi

1. Pastikan PHP dan Composer sudah tersedia.
2. Buka terminal pada folder `laravel-app`.
3. Jalankan perintah:

   `composer install`

4. Siapkan file konfigurasi `.env` berdasarkan `.env.example`.
5. Jalankan perintah:

   `php artisan key:generate`

6. Jalankan aplikasi:

   `php artisan serve --host=0.0.0.0`

7. Buka aplikasi melalui alamat yang disediakan oleh GitHub Codespaces pada port 8000.

## Dokumentasi Aplikasi

Tambahkan minimal tiga screenshot hasil aplikasi pada bagian ini:

1. Tampilan Dashboard.
2. Tampilan Data Ruangan dan Jadwal.
3. Tampilan Form dan Hasil Rekomendasi.

## Teknologi yang Digunakan

- PHP
- Laravel
- HTML
- CSS
- Blade Template
- GitHub Codespaces
- Git dan GitHub
