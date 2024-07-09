<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penghargaan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tentang_perpustakaans';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';
}
