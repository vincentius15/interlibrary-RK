<?php

use Illuminate\Database\Seeder;
use App\Peminjaman;
use Carbon\Carbon;
class PeminjamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $peminjaman = new Peminjaman();
        $peminjaman->user_id = 1;
        $peminjaman->book_id = 1;
        $peminjaman->tanggal_pinjam = Carbon::now();
        $peminjaman->tanggal_kembali = Carbon::now()->addDays(3);
        $peminjaman->denda = 0;
        $peminjaman->status = 0;
        $peminjaman->save();


        $peminjaman = new Peminjaman();
        $peminjaman->user_id = 4;
        $peminjaman->book_id = 1;
        $peminjaman->tanggal_pinjam = Carbon::now()->addWeeks(1);
        $peminjaman->tanggal_kembali = Carbon::now()->addWeeks(1)->addDays(3);
        $peminjaman->denda = 0;
        $peminjaman->status = 0;
        $peminjaman->save();

        $peminjaman = new Peminjaman();
        $peminjaman->user_id = 4;
        $peminjaman->book_id = 2;
        $peminjaman->tanggal_pinjam = Carbon::now()->addWeeks(1);
        $peminjaman->tanggal_kembali = Carbon::now()->addWeeks(1)->addDays(3);
        $peminjaman->denda = 10000;
        $peminjaman->status = 0;
        $peminjaman->save();

        $peminjaman = new Peminjaman();
        $peminjaman->user_id = 4;
        $peminjaman->book_id = 3;
        $peminjaman->tanggal_pinjam = Carbon::now()->addWeeks(1);
        $peminjaman->tanggal_kembali = Carbon::now()->addWeeks(1)->addDays(3);
        $peminjaman->denda = 10000;
        $peminjaman->status = 0;
        $peminjaman->save();


    }
}
