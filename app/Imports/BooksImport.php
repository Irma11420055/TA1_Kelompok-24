<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BooksImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Book([
            // code	title	author	isbn	cover	description	publisher	languange	edition	subject	classification	cp_or	year	location	status	quantity	available	borrowed	created_at
            'code' => $row[1],
            'title' => $row[2],
            'author' => $row[3],
            'isbn' => $row[4],
            // 'cover' => $row[5],
            'description' => $row[6],
            'publisher' => $row[7],
            // 'languange' => $row[8],
            'edition' => $row[9],
            'subject' => $row[10],
            'classification' => $row[11],
            'cp_or' => $row[12],
            'year' => $row[13],
            'location' => $row[14],
            // 'status' => $row[15],
            'created_at' => Carbon::parse($row[19]),
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}