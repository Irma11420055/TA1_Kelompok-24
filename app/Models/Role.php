<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public function user(){
        return $this->hasMany(User::class, 'id_role', 'id');
    }
}
