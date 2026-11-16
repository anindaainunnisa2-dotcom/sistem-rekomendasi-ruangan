<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\DataKampus;

class RekomendasiController extends Controller
{
    public function index()
    {
        return view('rekomendasi.index');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'jumlah_mahasiswa' => 'required|integer|min:1',
            'hari' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'fasilitas' => 'nullable|array',
        ]);

        $jumlahMahasiswa = (int) $request->jumlah_mahasiswa;
        $hari = $request->hari;
        $mulai = $request->mulai;
        $selesai = $request->selesai;
        $fasilitas = $request->fasilitas ?? [];

        if ($mulai >= $selesai) {
            return back()->withErrors([
                'selesai' => 'Jam selesai harus lebih besar dari jam mulai.'
            ])->withInput();
        }

        $hasil = [];

        foreach (DataKampus::ruangan() as $ruangan) {
            $alasan = [];

            if ($ruangan['kapasitas'] < $jumlahMahasiswa) {
                $alasan[] = 'Kapasitas tidak mencukupi';
            }

            $fasilitasKurang = array_diff(
                $fasilitas,
                $ruangan['fasilitas']
            );

            if (count($fasilitasKurang) > 0) {
                $alasan[] = 'Fasilitas tidak lengkap';
            }

            $bentrok = false;

            foreach (DataKampus::jadwal() as $jadwal) {
                if ($jadwal['ruangan_id'] == $ruangan['id']
                    && $jadwal['hari'] == $hari
                    && $mulai < $jadwal['selesai']
                    && $selesai > $jadwal['mulai']) {
                    $bentrok = true;
                    break;
                }
            }

            if ($bentrok) {
                $alasan[] = 'Jadwal ruangan berbenturan';
            }

            $hasil[] = [
                'ruangan' => $ruangan,
                'selisih' => $ruangan['kapasitas'] - $jumlahMahasiswa,
                'tersedia' => count($alasan) === 0,
                'alasan' => $alasan,
            ];
        }

        $rekomendasi = array_values(array_filter(
            $hasil,
            fn($item) => $item['tersedia']
        ));

        usort($rekomendasi, fn($a, $b) =>
            $a['selisih'] <=> $b['selisih']
        );

        return view('rekomendasi.hasil', compact(
            'hasil',
            'rekomendasi',
            'jumlahMahasiswa',
            'hari',
            'mulai',
            'selesai'
        ));
    }
}