<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\LogVisitor;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VisitorExport implements FromQuery, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
{
    use Exportable;
    protected $start_month;
    protected $end_month;

    public function __construct(int $start_month, int $end_month)
    {
        $this->start_month = Carbon::createFromFormat('m/Y', $start_month)->startOfMonth()->format('Y-m-d');
        $this->end_month = Carbon::createFromFormat('m/Y', $end_month)->endOfMonth()->format('Y-m-d');
    }

    public function query()
    {
        return LogVisitor::whereBetween('visited_at', [$this->start_month, $this->end_month]);
    }

    public function headings(): array
    {
        return [
            'ID Member',
            'Nama',
            'Tanggal Masuk',
            'Jam Masuk',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }


    public function map($visitor): array
    {
        return [
            $visitor->user->id_member,
            $visitor->user->name,
            Carbon::parse($visitor->visited_at)->format('d F Y'),
            Carbon::parse($visitor->visited_at)->format('H:i'),
        ];
    }

    public function registerEvents()
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:D1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                ]);
            },
        ];
    }
}
