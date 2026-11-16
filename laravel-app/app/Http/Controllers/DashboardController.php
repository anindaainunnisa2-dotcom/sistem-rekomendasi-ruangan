<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\DataKampus;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahRuangan = count(DataKampus::ruangan());
        $jumlahJadwal = count(DataKampus::jadwal());

        return view('dashboard', compact(
            'jumlahRuangan',
            'jumlahJadwal'
        ));
    }
}