<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard SIAP</title>
    <style>
        * { box-sizing: border-box; }
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
        header h2 { margin: 0; }
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
            padding: 40px 8%;
        }
        .hero {
            background: #dbeafe;
            padding: 35px;
            border-radius: 12px;
        }
        .hero h1 { color: #123b65; }
        .cards {
            display: flex;
            gap: 20px;
            margin-top: 25px;
            flex-wrap: wrap;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            flex: 1;
            min-width: 200px;
            box-shadow: 0 2px 8px #00000010;
        }
        .card h2 { color: #2563eb; }
        .btn {
            display: inline-block;
            background: #123b65;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 6px;
        }
        footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
        }
    </style>
</head>
<body>

<header>
    <h2>SIAP - Sistem Informasi Rekomendasi Ruangan</h2>
</header>

<nav>
<a href="/">Dashboard</a>
<a href="/ruangan">Data Ruangan</a>
<a href="/jadwal">Jadwal</a>
<a href="/rekomendasi">Rekomendasi Ruangan</a>
<a href="/tentang">Tentang</a> 
</nav>

<main>
    <section class="hero">
        <h1>Selamat Datang di SIAP</h1>
        <p>
            Sistem Informasi Rekomendasi Ruangan Perkuliahan
            membantu menentukan ruangan kuliah berdasarkan
            kapasitas, fasilitas, dan ketersediaan jadwal.
        </p>
        <a href="{{ url('/rekomendasi') }}" class="btn">
            Mulai Rekomendasi
        </a>
    </section>

    <section class="cards">
        <div class="card">
            <h3>Total Ruangan</h3>
            <h2>{{ $jumlahRuangan }}</h2>
            <p>Data ruangan yang tersedia.</p>
        </div>

        <div class="card">
            <h3>Total Jadwal</h3>
            <h2>{{ $jumlahJadwal }}</h2>
            <p>Data penggunaan ruangan.</p>
        </div>

        <div class="card">
            <h3>Fitur Sistem</h3>
            <h2>3 Kriteria</h2>
            <p>Kapasitas, fasilitas, dan jadwal.</p>
        </div>
    </section>
</main>

<footer>
    <p>© 2026 SIAP | Sistem Rekomendasi Ruangan Perkuliahan</p>
</footer>

</body>
</html>
