<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $beritas = [
            [
                'id' => 1,
                'judul' => 'Pendidikan Inklusif untuk Semua Anak',
                'isi' => 'Pendidikan yang setara memberikan kesempatan yang adil...',
                'gambar_url' => '/img/berita1.jpg',
            ],
            [
                'id' => 2,
                'judul' => 'Akses Kesehatan bagi Remaja Perempuan',
                'isi' => 'Remaja perempuan perlu akses kesehatan yang layak...',
                'gambar_url' => '/img/berita2.jpg',
            ],
            [
                'id' => 3,
                'judul' => 'Peran Laki-laki dalam Kesetaraan Gender',
                'isi' => 'Kesetaraan tidak hanya untuk perempuan, laki-laki pun berperan penting...',
                'gambar_url' => '/img/berita3.jpg',
            ],
        ];

        return view('welcome', compact('beritas'));
    }
}
