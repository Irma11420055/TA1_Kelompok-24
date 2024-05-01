<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryArchive extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'title',
        'slug',
        'file',
        'active',
        'type'
    ];
}
