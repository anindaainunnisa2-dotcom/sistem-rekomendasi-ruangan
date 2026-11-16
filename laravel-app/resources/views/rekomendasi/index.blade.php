<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rekomendasi - SIAP</title>
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
        main {
            max-width: 850px;
            margin: 35px auto;
            padding: 0 20px;
        }
        .form-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #00000010;
        }
        label {
            display: block;
            margin: 18px 0 8px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }
        .facilities {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
        }
        .facilities label {
            font-weight: normal;
            margin: 8px 0;
        }
        .facilities input {
            width: auto;
        }
        button {
            margin-top: 25px;
            padding: 13px 22px;
            background: #123b65;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover { background: #2563eb; }
        .error {
            color: #b91c1c;
            margin-top: 15px;
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
    <h2>SIAP - Rekomendasi Ruangan</h2>
</header>

<nav>
    <a href="{{ url('/') }}">Dashboard</a>
    <a href="{{ url('/ruangan') }}">Data Ruangan</a>
    <a href="{{ url('/jadwal') }}">Jadwal</a>
    <a href="{{ url('/rekomendasi') }}">Rekomendasi Ruangan</a>
    <a href="{{ url('/tentang') }}">Tentang</a>
</nav>

<main>
    <div class="form-card">
        <h1>Formulir Rekomendasi Ruangan</h1>
        <p>Isi kebutuhan perkuliahan untuk mendapatkan rekomendasi ruangan yang sesuai.</p>

        @if ($errors->any())
            <div class="error">
                <strong>Periksa kembali data yang dimasukkan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/rekomendasi/proses') }}" method="POST">
            @csrf

            <label>Jumlah Mahasiswa</label>
            <input type="number" name="jumlah_mahasiswa"
                   min="1" value="{{ old('jumlah_mahasiswa') }}"
                   placeholder="Contoh: 30" required>

            <label>Hari Perkuliahan</label>
            <select name="hari" required>
                <option value="">-- Pilih Hari --</option>
                @foreach (['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $hari)
                    <option value="{{ $hari }}" @selected(old('hari') == $hari)>
                        {{ $hari }}
                    </option>
                @endforeach
            </select>

            <label>Jam Mulai</label>
            <input type="time" name="mulai"
                   value="{{ old('mulai') }}" required>

            <label>Jam Selesai</label>
            <input type="time" name="selesai"
                   value="{{ old('selesai') }}" required>

            <label>Fasilitas yang Dibutuhkan</label>
            <div class="facilities">
                @foreach (['Proyektor','AC','Komputer','Papan Tulis'] as $fasilitas)
                    <label>
                        <input type="checkbox" name="fasilitas[]"
                               value="{{ $fasilitas }}"
                               @checked(in_array($fasilitas, old('fasilitas', [])))>
                        {{ $fasilitas }}
                    </label>
                @endforeach
            </div>

            <button type="submit">Cari Rekomendasi Ruangan</button>
        </form>
    </div>
</main>

<footer>
    <p>© 2026 SIAP | Sistem Rekomendasi Ruangan Perkuliahan</p>
</footer>

</body>
</html>
