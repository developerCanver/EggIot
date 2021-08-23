<?php

namespace App\Http\Livewire\Jumbo;

use App\Models\Egg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ReporteJumbo extends Component
{
    public function render()
    {
        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;

        if ($rol_user==1) {

            $cantidadHuevos=  DB::table('eggs') 
                    ->where('weight','>=',78)    
                        
                    ->get();

        $huevo=  Egg::orderByDesc('id_egg') 
                    ->where('weight','>=',78)
                    ->first();

        }else{

            $cantidadHuevos=  DB::table('eggs') 
                        ->where('weight','>=',78) 
                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                        ->where('distributor_id',$distribuidora)    
                        ->get();

            $huevo=  Egg::orderByDesc('id_egg') 
                        ->where('weight','>=',78)
                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                        ->where('distributor_id',$distribuidora)    
                        ->first();
            
        }



        $cantidadHuevos  = $cantidadHuevos->count();

        $panales=round(($cantidadHuevos/35),1);

        return view('livewire.jumbo.reporte-jumbo',
                [
                    'cantidadHuevos' => $cantidadHuevos,
                    'huevo' => $huevo,
                    'panales' => $panales,
            
                ]);

        }


    
}
