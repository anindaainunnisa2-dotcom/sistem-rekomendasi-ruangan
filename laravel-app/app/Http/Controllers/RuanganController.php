<?php

namespace App\Http\Controllers;

use App\Data\DataKampus;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangan = DataKampus::ruangan();

        return view('ruangan', compact('ruangan'));
    }

    public function jadwal()
    {
        $jadwal = DataKampus::jadwal();

        $namaRuangan = [];

        foreach (DataKampus::ruangan() as $item) {
            $namaRuangan[$item['id']] = $item['nama'];
        }

        return view('jadwal', compact('jadwal', 'namaRuangan'));
    }
}
