<?php

namespace App\Exports;

use App\Models\Lending;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;

class LendingBookExport implements FromQuery, WithHeadings, WithStyles, ShouldAutoSize, WithMapping
{
    use Exportable;

    protected $start_month;
    protected $end_month;
    protected $status;
    protected $type;

    public function __construct($start_month, $end_month, string $status, string $type)
    {
        $this->start_month = Carbon::createFromFormat('m/Y', $start_month)->startOfMonth()->format('Y-m-d');
        $this->end_month = Carbon::createFromFormat('m/Y', $end_month)->endOfMonth()->format('Y-m-d');
        $this->status = $status;
        $this->type = $type;
    }

    public function query()
    {
        if ($this->type == 'book') {
            return Lending::with('user', 'book')
                ->where('status', $this->status)
                ->whereBetween('lending_date', [$this->start_month, $this->end_month]);
        } else {
            return Lending::with('user', 'compactDisk')
                ->where('status', $this->status)
                ->whereBetween('lending_date', [$this->start_month, $this->end_month]);
        }
    }

    public function map($lending): array
    {
        if ($this->type == 'book') {
            $title = $lending->book->title;
        } else {
            $title = $lending->compactDisk->title;
        }

        return [
            $lending->id,
            $lending->user->name,
            $title, // Mengambil judul buku atau disk kompak sesuai dengan kondisi
            $lending->lending_date,
            $lending->return_date,
            $lending->return_date_real,
            $lending->status,
            $lending->fine,
            $lending->extend_date,
        ];
    }

    public function headings(): array
    {
        $headings = [
            '#',
            'User Name',
        ];

        if ($this->type == 'book') {
            $headings[] = 'Book Title';
        } else {
            $headings[] = 'Compact Disk Title';
        }

        $headings = array_merge($headings, [
            'Lending Date',
            'Return Date',
            'Real Return Date',
            'Status',
            'Fine',
            'Extend Date',
        ]);

        return $headings;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                // Menambahkan gaya untuk header
                $headerStyleArray = [
                    'font' => [
                        'bold' => true,
                        'color' => ['argb' => 'FF000000'],
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => ['argb' => 'FF00FF00'],
                    ],
                ];
                $sheet->getStyle('A1:I1')->applyFromArray($headerStyleArray);

                // Mengatur ukuran otomatis untuk semua kolom
                foreach (range('A', 'I') as $column) {
                    $sheet->getColumnDimension($column)->setAutoSize(true);
                }
            },
        ];
    }
}
