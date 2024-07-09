<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinkLinkLainnya extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'link_link_lainnyas';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';
}
