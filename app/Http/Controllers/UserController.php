<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function peminjamanSaya()
    {
        $peminjamanSaya = [
            [
                'judul' => 'Cracking the Coding Interview',
                'pengarang' => 'Arya Wiranata',
                'isbn' => '123231',
                'penerbit' => 'ITS Press',
                'status' => 'Menunggu persetujuan',
                'img' => 'http://localhost:8000/img/cover/c-programming.jpg'
            ],
            [
                'judul' => 'Ternak Lele di Kostan',
                'pengarang' => 'Wembo Dumbo',
                'isbn' => '123232',
                'penerbit' => 'ITS Press',
                'status' => 'Sudah dikembalikan'
            ],
            [
                'judul' => 'Misteri Jubah Kyuubi',
                'pengarang' => 'Icad Bobby',
                'isbn' => '123233',
                'penerbit' => 'ITS Press',
                'status' => 'Dalam peminjaman'
            ]
        ];
//        dd($peminjamanSaya);
        return view('general.peminjaman-saya')->with('peminjamans', $peminjamanSaya);
    }

    public function peminjamanSayaDitolak()
    {
        return view('general.peminjaman-saya-ditolak');
    }

    public function peminjamanSayaTungguSetuju()
    {
        return view('general.peminjaman-saya-tunggu-setuju');
    }

    public function peminjamanSayaSudahKembali()
    {
        return view('general.peminjaman-saya-sudah-kembali');
    }

    public function peminjamanSayaSedangDipinjam()
    {
        return view('general.peminjaman-saya-sedang-dipinjam');
    }

    public function peminjamanSayaTungguAmbil()
    {
        return view('general.peminjaman-saya-tunggu-ambil');
    }
}
