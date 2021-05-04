<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id_distributor';
    protected $fillable = [
        'nameRol',
        'phone',
        'direction',
        'img',
        'user_id',   
    ];
}
