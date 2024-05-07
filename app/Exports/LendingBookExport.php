<?php

namespace App\Exports;

use App\Models\Lending;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class LendingBookExport implements FromQuery
{
    use Exportable;
    protected $start_month;
    protected $end_month;
    protected $start_year;
    protected $end_year;
    protected $status;
    protected $type;
    public function __construct(int $start_month, int $end_month, int $start_year, int $end_year, string $status, string $type)
    {
        $this->start_month = $start_month;
        $this->end_month = $end_month;
        $this->start_year = $start_year;
        $this->end_year = $end_year;
        $this->status = $status;
        $this->type = $type;
    }

    public function query()
    {
        if ($this->type == 'book') {
            return Lending::with('user', 'book')
                ->where('status', $this->status)
                ->whereYear('lending_date', '>=', $this->start_year)
                ->whereYear('lending_date', '<=', $this->end_year)
                ->whereMonth('lending_date', '>=', $this->start_month)
                ->whereMonth('lending_date', '<=', $this->end_month);
        } else {
            return Lending::with('user', 'cd_dvd')
                ->where('status', $this->status)
                ->whereYear('lending_date', '>=', $this->start_year)
                ->whereYear('lending_date', '<=', $this->end_year)
                ->whereMonth('lending_date', '>=', $this->start_month)
                ->whereMonth('lending_date', '<=', $this->end_month);
        }
    }
}