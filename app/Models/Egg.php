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

    public function scopeFecha($query, $de,$hasta){
 
        if(!$hasta){
            $hasta = date('Y-m-d');
        }
        $hasta =date("Y-m-d",strtotime($hasta."+ 1 days"));
        if($de)
        return $query->whereBetween('created_at', [$de,$hasta]);
    }
}
