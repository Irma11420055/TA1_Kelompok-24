<?php

namespace App\Http\Controllers\Backend;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lending;
use App\Models\LogVisitor;

class DashboardController extends Controller
{
    public function index()
    {
        $visitorToday = LogVisitor::whereDate('visited_at', today())->count();
        // Total Peminjaman, itu total card Pemesanan + Peminjaman.
        $totalLending = Lending::whereIn('status', ['pending', 'lent', 'overdue', 'extend'])->count();
        // Pemesanan itu total anggota yang memesan buku dari website (secara online).
        $totalLendingByUser = Lending::where('status', 'pending')
            // created by user not admin
            ->whereHas('user', function ($query) {
                $query->role(['student', 'lecturer', 'staff']);
            })->count();
        $totalLendingByAdmin = Lending::where('status', 'lent')
            // created by admin
            ->whereHas('user', function ($query) {
                $query->role('admin');
            })->count();
        $announcements = Announcement::latest()->limit(5)->get();
        return view('backend.dashboard.index', compact('announcements', 'visitorToday', 'totalLending', 'totalLendingByUser', 'totalLendingByAdmin'));
    }
}
