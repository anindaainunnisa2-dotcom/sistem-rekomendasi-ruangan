<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang SIAP</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }
        header {
            background: #123b65;
            color: white;
            padding: 22px 8%;
        }
        nav {
            background: white;
            padding: 16px 8%;
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }
        nav a {
            color: #123b65;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .content {
            background: white;
            padding: 30px;
            border-radius: 12px;
            line-height: 1.8;
        }
        h1, h2 { color: #123b65; }
        footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
        }
    </style>
</head>
<body>

<header>
    <h2>SIAP - Tentang Aplikasi</h2>
</header>

<nav>
    <a href="{{ url('/') }}">Dashboard</a>
    <a href="{{ url('/ruangan') }}">Data Ruangan</a>
    <a href="{{ url('/jadwal') }}">Jadwal</a>
    <a href="{{ url('/rekomendasi') }}">Rekomendasi Ruangan</a>
    <a href="{{ url('/tentang') }}">Tentang</a>
</nav>

<main>
    <div class="content">
        <h1>Tentang SIAP</h1>

        <p>
            SIAP merupakan singkatan dari Sistem Informasi
            Rekomendasi Ruangan Perkuliahan. Aplikasi ini dibuat
            untuk membantu proses pemilihan ruangan kuliah
            berdasarkan kebutuhan kegiatan pembelajaran.
        </p>

        <h2>Tujuan Aplikasi</h2>
        <p>
            Membantu pengguna menentukan ruangan yang sesuai
            dengan jumlah mahasiswa, fasilitas yang dibutuhkan,
            serta ketersediaan jadwal penggunaan ruangan.
        </p>

        <h2>Kriteria Rekomendasi</h2>
        <p>
            1. Kapasitas ruangan harus mencukupi jumlah mahasiswa.
        </p>
        <p>
            2. Fasilitas ruangan harus sesuai dengan kebutuhan.
        </p>
        <p>
            3. Ruangan tidak boleh memiliki jadwal yang berbenturan.
        </p>
        <p>
            4. Ruangan yang memenuhi kriteria diurutkan berdasarkan
            selisih kapasitas terkecil.
        </p>

        <h2>Identitas Pengembang</h2>
        <p>Nama: Aninda Ainunnisa</p>
        <p>NIM: C2483207028</p>
        <p>Program Studi: S1 Pendidikan Teknologi Informasi</p>
        <p>Mata Kuliah: Pemrograman Internet</p>
    </div>
</main>

<footer>
    <p>© 2026 SIAP | Sistem Rekomendasi Ruangan Perkuliahan</p>
</footer>

</body>
</html>
