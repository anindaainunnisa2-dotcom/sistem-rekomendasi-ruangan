<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ruangan - SIAP</title>
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
        main { padding: 35px 8%; }
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }
        th, td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #123b65;
            color: white;
        }
        tr:hover { background: #eff6ff; }
        footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
        }
    </style>
</head>
<body>

<header>
    <h2>SIAP - Data Ruangan Perkuliahan</h2>
</header>

<nav>
    <a href="{{ url('/') }}">Dashboard</a>
    <a href="{{ url('/ruangan') }}">Data Ruangan</a>
    <a href="{{ url('/jadwal') }}">Jadwal</a>
    <a href="{{ url('/rekomendasi') }}">Rekomendasi Ruangan</a>
    <a href="{{ url('/tentang') }}">Tentang</a>
</nav>

<main>
    <h1>Daftar Ruangan Kampus</h1>
    <p>Berikut merupakan daftar ruangan yang tersedia untuk kegiatan perkuliahan.</p>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Ruangan</th>
                    <th>Gedung</th>
                    <th>Kapasitas</th>
                    <th>Fasilitas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ruangan as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['gedung'] }}</td>
                    <td>{{ $item['kapasitas'] }} orang</td>
                    <td>{{ implode(', ', $item['fasilitas']) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

<footer>
    <p>© 2026 SIAP | Sistem Rekomendasi Ruangan Perkuliahan</p>
</footer>

</body>
</html>
