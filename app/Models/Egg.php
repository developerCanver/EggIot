<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egg extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id_egg';
    protected $fillable = [
        'code',
        'weight',
        'iots_id',
    ];
}
