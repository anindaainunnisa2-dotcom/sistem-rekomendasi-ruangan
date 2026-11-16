<?php

namespace App\Data;

class DataKampus
{
    public static function ruangan(): array
    {
        return [
            [
                'id' => 1,
                'nama' => 'Ruang A101',
                'gedung' => 'Gedung A',
                'kapasitas' => 30,
                'fasilitas' => ['Proyektor', 'AC', 'Papan Tulis']
            ],
            [
                'id' => 2,
                'nama' => 'Ruang A102',
                'gedung' => 'Gedung A',
                'kapasitas' => 40,
                'fasilitas' => ['Proyektor', 'AC', 'Papan Tulis']
            ],
            [
                'id' => 3,
                'nama' => 'Ruang A103',
                'gedung' => 'Gedung A',
                'kapasitas' => 25,
                'fasilitas' => ['Papan Tulis', 'AC']
            ],
            [
                'id' => 4,
                'nama' => 'Ruang A104',
                'gedung' => 'Gedung A',
                'kapasitas' => 50,
                'fasilitas' => ['Proyektor', 'AC', 'Komputer']
            ],
            [
                'id' => 5,
                'nama' => 'Ruang B201',
                'gedung' => 'Gedung B',
                'kapasitas' => 35,
                'fasilitas' => ['Proyektor', 'Papan Tulis']
            ],
            [
                'id' => 6,
                'nama' => 'Ruang B202',
                'gedung' => 'Gedung B',
                'kapasitas' => 45,
                'fasilitas' => ['Proyektor', 'AC']
            ],
            [
                'id' => 7,
                'nama' => 'Ruang B203',
                'gedung' => 'Gedung B',
                'kapasitas' => 20,
                'fasilitas' => ['Papan Tulis']
            ],
            [
                'id' => 8,
                'nama' => 'Ruang B204',
                'gedung' => 'Gedung B',
                'kapasitas' => 60,
                'fasilitas' => ['Proyektor', 'AC', 'Komputer']
            ],
            [
                'id' => 9,
                'nama' => 'Ruang C301',
                'gedung' => 'Gedung C',
                'kapasitas' => 30,
                'fasilitas' => ['Proyektor', 'AC']
            ],
            [
                'id' => 10,
                'nama' => 'Ruang C302',
                'gedung' => 'Gedung C',
                'kapasitas' => 40,
                'fasilitas' => ['Papan Tulis', 'Komputer']
            ],
            [
                'id' => 11,
                'nama' => 'Laboratorium Komputer 1',
                'gedung' => 'Gedung C',
                'kapasitas' => 30,
                'fasilitas' => ['Komputer', 'Proyektor', 'AC']
            ],
            [
                'id' => 12,
                'nama' => 'Laboratorium Komputer 2',
                'gedung' => 'Gedung C',
                'kapasitas' => 25,
                'fasilitas' => ['Komputer', 'Proyektor', 'AC']
            ],
            [
                'id' => 13,
                'nama' => 'Ruang D401',
                'gedung' => 'Gedung D',
                'kapasitas' => 50,
                'fasilitas' => ['Proyektor', 'AC', 'Papan Tulis']
            ],
            [
                'id' => 14,
                'nama' => 'Ruang D402',
                'gedung' => 'Gedung D',
                'kapasitas' => 35,
                'fasilitas' => ['Proyektor', 'Papan Tulis']
            ],
            [
                'id' => 15,
                'nama' => 'Aula Kampus',
                'gedung' => 'Gedung D',
                'kapasitas' => 100,
                'fasilitas' => ['Proyektor', 'AC', 'Komputer', 'Papan Tulis']
            ],
        ];
    }

    public static function jadwal(): array
    {
        return [
            [
                'id' => 1,
                'ruangan_id' => 1,
                'mata_kuliah' => 'Pemrograman Internet',
                'kelas' => 'PTI 5A',
                'hari' => 'Senin',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 2,
                'ruangan_id' => 2,
                'mata_kuliah' => 'Basis Data',
                'kelas' => 'PTI 3A',
                'hari' => 'Senin',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 3,
                'ruangan_id' => 3,
                'mata_kuliah' => 'Desain Pembelajaran',
                'kelas' => 'PTI 5B',
                'hari' => 'Selasa',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 4,
                'ruangan_id' => 4,
                'mata_kuliah' => 'Pemrograman Web',
                'kelas' => 'PTI 3B',
                'hari' => 'Selasa',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 5,
                'ruangan_id' => 5,
                'mata_kuliah' => 'Jaringan Komputer',
                'kelas' => 'PTI 5A',
                'hari' => 'Rabu',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 6,
                'ruangan_id' => 6,
                'mata_kuliah' => 'Sistem Informasi',
                'kelas' => 'PTI 3A',
                'hari' => 'Rabu',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 7,
                'ruangan_id' => 7,
                'mata_kuliah' => 'Statistika Pendidikan',
                'kelas' => 'PTI 5B',
                'hari' => 'Kamis',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 8,
                'ruangan_id' => 8,
                'mata_kuliah' => 'Multimedia Pembelajaran',
                'kelas' => 'PTI 3B',
                'hari' => 'Kamis',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
            [
                'id' => 9,
                'ruangan_id' => 9,
                'mata_kuliah' => 'Etika Profesi',
                'kelas' => 'PTI 5A',
                'hari' => 'Jumat',
                'mulai' => '08:00',
                'selesai' => '10:00'
            ],
            [
                'id' => 10,
                'ruangan_id' => 11,
                'mata_kuliah' => 'Praktikum Komputer',
                'kelas' => 'PTI 3A',
                'hari' => 'Jumat',
                'mulai' => '10:00',
                'selesai' => '12:00'
            ],
        ];
    }
}
