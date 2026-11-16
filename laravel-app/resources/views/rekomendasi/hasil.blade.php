<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi - SIAP</title>
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
        .panel {
            background: white;
            padding: 22px;
            border-radius: 10px;
            margin-bottom: 22px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #123b65;
            color: white;
        }
        .success { color: #15803d; font-weight: bold; }
        .failed { color: #b91c1c; font-weight: bold; }
        .button {
            display: inline-block;
            background: #123b65;
            color: white;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
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
    <h2>SIAP - Hasil Rekomendasi Ruangan</h2>
</header>

<nav>
    <a href="{{ url('/') }}">Dashboard</a>
    <a href="{{ url('/ruangan') }}">Data Ruangan</a>
    <a href="{{ url('/jadwal') }}">Jadwal</a>
    <a href="{{ url('/rekomendasi') }}">Rekomendasi Ruangan</a>
    <a href="{{ url('/tentang') }}">Tentang</a>
</nav>

<main>
    <h1>Hasil Analisis Rekomendasi</h1>

    <div class="panel">
        <h3>Kebutuhan Perkuliahan</h3>
        <p>Jumlah mahasiswa: {{ $jumlahMahasiswa }} orang</p>
        <p>Hari: {{ $hari }}</p>
        <p>Waktu: {{ $mulai }} - {{ $selesai }}</p>
    </div>

    <div class="panel">
        <h2>Ruangan yang Direkomendasikan</h2>

        @if (count($rekomendasi) > 0)
            <p class="success">
                Ditemukan {{ count($rekomendasi) }} ruangan yang sesuai.
            </p>

            <table>
                <thead>
                    <tr>
                        <th>Nama Ruangan</th>
                        <th>Kapasitas</th>
                        <th>Fasilitas</th>
                        <th>Sisa Kapasitas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekomendasi as $item)
                    <tr>
                        <td>{{ $item['ruangan']['nama'] }}</td>
                        <td>{{ $item['ruangan']['kapasitas'] }} orang</td>
                        <td>{{ implode(', ', $item['ruangan']['fasilitas']) }}</td>
                        <td>{{ $item['selisih'] }} orang</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Urutan rekomendasi disusun berdasarkan sisa kapasitas terkecil.</p>
        @else
            <p class="failed">
                Tidak ditemukan ruangan yang memenuhi seluruh kriteria.
            </p>
            <p>Silakan ubah jumlah mahasiswa, jadwal, atau fasilitas yang dibutuhkan.</p>
        @endif
    </div>

    <div class="panel">
        <h2>Analisis Seluruh Ruangan</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Ruangan</th>
                    <th>Status</th>
                    <th>Alasan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasil as $item)
                <tr>
                    <td>{{ $item['ruangan']['nama'] }}</td>
                    <td>
                        @if ($item['tersedia'])
                            <span class="success">Direkomendasikan</span>
                        @else
                            <span class="failed">Tidak direkomendasikan</span>
                        @endif
                    </td>
                    <td>
                        @if ($item['tersedia'])
                            Memenuhi seluruh kriteria
                        @else
                            {{ implode(', ', $item['alasan']) }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ url('/rekomendasi') }}" class="button">Kembali ke Formulir</a>
</main>

<footer>
    <p>© 2026 SIAP | Sistem Rekomendasi Ruangan Perkuliahan</p>
</footer>

</body>
</html>
