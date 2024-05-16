<?php

namespace App\Http\Controllers\Backend;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lending;
use App\Models\LogLending;
use App\Models\LogVisitor;

class DashboardController extends Controller
{
    public function index()
    {
        $visitorToday = LogVisitor::whereDate('visited_at', today())->count();
        // Total Peminjaman, itu total card Pemesanan + Peminjaman.
        // Pemesanan itu total anggota yang memesan buku dari website (secara online).
        $totalLendingByUser = LogLending::where('status', 'pending')
            ->whereDate('created_at', today())->count();
        $totalLendingByAdmin = LogLending::where('status', 'lent')
            ->whereDate('created_at', today())->count();
        $totalLending = $totalLendingByUser + $totalLendingByAdmin;
        $announcements = Announcement::where('status', 'pin')->latest()->limit(5)->get();
        return view('backend.dashboard.index', compact('announcements', 'visitorToday', 'totalLending', 'totalLendingByUser', 'totalLendingByAdmin'));
    }
}