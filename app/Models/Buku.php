<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable;

    protected $table = 'bukus';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public function sluggable(): array{
        return[
            'slug' => [
                'source' => 'kode_buku'
            ]
            ];
    }

    public function judul_buku(){
        return $this->belongsTo(JudulBuku::class, 'id_judul', 'id');
    }
}
