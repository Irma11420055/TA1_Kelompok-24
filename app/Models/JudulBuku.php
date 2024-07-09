<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JudulBuku extends Model
{
    use HasFactory;

    protected $table = 'judul_bukus';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public function buku(){
        return $this->hasMany(Buku::class, 'id_judul', 'id');
    }
}
