<?php

namespace App\Http\Controllers;

use App\Models\LogPengunjung;
use App\Models\Pemesanan;
use App\Models\Peminjaman;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        $pengunjungCount = LogPengunjung::count();
        $peminjamanCount = Peminjaman::count();
        $pemesananCount = Pemesanan::count();

        $dataPengumumann = Pengumuman::all();

        return view('/Admin.dashboard', [
        'pengunjung_count' => $pengunjungCount,
        'pemesanan_count' => $pemesananCount,
        'peminjaman_count' => $peminjamanCount,
        'data_pengumumann' => $dataPengumumann
        ]);
    }
}
