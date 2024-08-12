<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Book;
use App\Models\Lending;
use App\Models\LogVisitor;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // book with highest rating

        $bestBooks = Book::has('reviews')
            ->groupBy('slug')
            ->withCount('reviews')
            ->get()
            ->sortByDesc('rating')
            ->take(4);

        $pengunjungChartPerhari = $this->PrivatepengunjungChartPerhari();
        $pengunjungChartProdi = $this->PrivatepengunjungChartProdi();
        $peminjamanChartPerhari = $this->PrivatepeminjamanChartPerhari();
        $peminjamanChartPerrole = $this->PrivatepeminjamanChartPerrole();
        $peminjamanChartPerprodi = $this->PrivatepeminjamanChartPerprodi();
        return view('frontend.home.index', compact('bestBooks', 'pengunjungChartPerhari', 'pengunjungChartProdi', 'peminjamanChartPerhari', 'peminjamanChartPerrole', 'peminjamanChartPerprodi'));
    }

    private function PrivatepengunjungChartPerhari()
    {
        $startDate = now()->subDays(7)->startOfDay();
        $visitors = LogVisitor::select('visited_at')
            ->where('visited_at', '>=', $startDate)
            ->get();

        $pengunjungPerHari = $visitors->groupBy(function ($date) {
            return Carbon::parse($date->visited_at)->isoFormat('dddd, D MMMM YYYY');
        });
        $visitorCounts = [];

        foreach ($pengunjungPerHari as $day => $visitors) {
            $visitorCounts[$day] = count($visitors);
        }

        $data = [
            'labels' => array_keys($visitorCounts),
            'datasets' => [
                [
                    'label' => 'Jumlah Pengunjung/Hari',
                    'data' => array_values($visitorCounts),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ]
            ]
        ];

        return $data;
    }

    private function PrivatepengunjungChartProdi()
    {
        $startDate = now()->subMonths(12)->startOfMonth();
        $visitors = LogVisitor::select('visited_at', 'users.major')
            ->join('users', 'users.id', '=', 'log_visitors.user_id')
            ->where('visited_at', '>=', $startDate)
            ->get();

        $visitorCounts = [];
        foreach ($visitors as $visitor) {
            $bulan = Carbon::parse($visitor->visited_at)->translatedFormat('F');
            $major = $visitor->major;
            if (!isset($visitorCounts[$major][$bulan])) {
                $visitorCounts[$major][$bulan] = 0;
            }
            $visitorCounts[$major][$bulan]++;
        }

        // Determine unique months that have data
        $labels = collect($visitorCounts)->flatMap(function ($majorData) {
            return array_keys($majorData);
        })->unique()->sort()->values()->toArray();

        // Define colors for datasets
        $colors = [
            'rgba(54, 162, 235, 0.2)',  // Blue
            'rgba(255, 99, 132, 0.2)',  // Red
            'rgba(75, 192, 192, 0.2)',  // Green
            'rgba(153, 102, 255, 0.2)', // Purple
            'rgba(255, 159, 64, 0.2)',  // Orange
        ];

        $datasets = [];
        $colorIndex = 0;
        foreach ($visitorCounts as $major => $data) {
            $dataArr = [];
            foreach ($labels as $bulan) {
                $count = isset($data[$bulan]) ? $data[$bulan] : 0;
                $dataArr[] = $count;
            }

            $datasets[] = [
                'label' => $major,
                'data' => $dataArr,
                'backgroundColor' => $colors[$colorIndex % count($colors)],
                'borderColor' => rtrim($colors[$colorIndex % count($colors)], '0.2') . '1',
                'borderWidth' => 1,
            ];

            $colorIndex++;
        }

        $data = [
            'labels' => $labels,
            'datasets' => $datasets,
        ];

        return $data;
    }

    private function PrivatepeminjamanChartPerhari()
    {
        $startDate = now()->subDays(7)->startOfDay();
        $visitors = Lending::select('updated_at')
            ->where('updated_at', '>=', $startDate)
            ->where('status', 'lent')
            ->get();

        $pengunjungPerHari = $visitors->groupBy(function ($date) {
            return Carbon::parse($date->updated_at)->isoFormat('dddd, D MMMM YYYY');
        });
        $visitorCounts = [];

        foreach ($pengunjungPerHari as $day => $visitors) {
            $visitorCounts[$day] = count($visitors);
        }

        $data = [
            'labels' => array_keys($visitorCounts),
            'datasets' => [
                [
                    'label' => 'Jumlah Pengunjung/Hari',
                    'data' => array_values($visitorCounts),
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ]
            ]
        ];

        return $data;
    }

    private function PrivatepeminjamanChartPerprodi()
    {
        $startDate = now()->subMonths(12)->startOfMonth();
        $visitors = Lending::select('lendings.updated_at', 'users.major')
            ->join('users', 'users.id', '=', 'lendings.user_id')
            ->where('lendings.updated_at', '>=', $startDate)
            ->where('lendings.status', 'lent')
            ->get();

        $visitorCounts = [];
        foreach ($visitors as $visitor) {
            $bulan = Carbon::parse($visitor->visited_at)->translatedFormat('F');
            $major = $visitor->major;
            if (!isset($visitorCounts[$major][$bulan])) {
                $visitorCounts[$major][$bulan] = 0;
            }
            $visitorCounts[$major][$bulan]++;
        }

        $labels = collect($visitorCounts)->flatMap(function ($majorData) {
            return array_keys($majorData);
        })->unique()->sort()->values()->toArray();
        $colors = [
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
        ];

        $datasets = [];
        $colorIndex = 0;
        foreach ($visitorCounts as $major => $data) {
            $dataArr = [];
            foreach ($labels as $bulan) {
                $count = isset($data[$bulan]) ? $data[$bulan] : 0;
                $dataArr[] = $count;
            }

            $datasets[] = [
                'label' => $major,
                'data' => $dataArr,
                'backgroundColor' => $colors[$colorIndex % count($colors)],
                'borderColor' => rtrim($colors[$colorIndex % count($colors)], '0.2') . '1',
                'borderWidth' => 1,
            ];

            $colorIndex++;
        }

        $data = [
            'labels' => $labels,
            'datasets' => $datasets,
        ];

        return $data;
    }

    private function PrivatepeminjamanChartPerrole()
    {
        $startDate = now()->subMonths(12)->startOfMonth();

        // Get all roles except 'admin'
        $roles = Role::where('name', '!=', 'admin')->get()->pluck('name')->toArray();

        // Join lendings with users and roles
        $lendings = Lending::select('lendings.updated_at', 'roles.name as role')
            ->join('users', 'users.id', '=', 'lendings.user_id')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('lendings.updated_at', '>=', $startDate)
            ->where('lendings.status', 'lent')
            ->whereIn('roles.name', $roles)
            ->get();

        $lendingCounts = [];
        foreach ($lendings as $lending) {
            $bulan = Carbon::parse($lending->updated_at)->translatedFormat('F');
            $role = $lending->role;
            if (!isset($lendingCounts[$role][$bulan])) {
                $lendingCounts[$role][$bulan] = 0;
            }
            $lendingCounts[$role][$bulan]++;
        }

        $labels = collect($lendingCounts)->flatMap(function ($roleData) {
            return array_keys($roleData);
        })->unique()->sort()->values()->toArray();
        $colors = [
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
        ];

        $datasets = [];
        $colorIndex = 0;
        foreach ($lendingCounts as $role => $data) {
            $dataArr = [];
            foreach ($labels as $bulan) {
                $count = isset($data[$bulan]) ? $data[$bulan] : 0;
                $dataArr[] = $count;
            }

            $datasets[] = [
                'label' => $role,
                'data' => $dataArr,
                'backgroundColor' => $colors[$colorIndex % count($colors)],
                'borderColor' => rtrim($colors[$colorIndex % count($colors)], '0.2') . '1',
                'borderWidth' => 1,
            ];

            $colorIndex++;
        }

        $data = [
            'labels' => $labels,
            'datasets' => $datasets,
        ];

        return $data;
    }
}
