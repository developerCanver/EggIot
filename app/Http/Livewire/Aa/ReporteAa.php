<?php

namespace App\Http\Livewire\Aa;

use App\Models\Egg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ReporteAa extends Component
{
 
    public function render()
    {
        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;

        if ($rol_user==1) {
            $cantidadHuevos=  DB::table('eggs') 
                        ->where('weight','<=',66.9)
                        ->where('weight','>=',60)         
                        ->get();

            $huevo=  Egg::orderByDesc('id_egg') 
                        ->where('weight','<=',66.9)
                        ->where('weight','>=',60) 
                        ->first();
                        //dd($huevo);

        }else{
            
            $cantidadHuevos=  DB::table('eggs') 
                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                        ->where('distributor_id',$distribuidora)  
                        ->where('weight','<=',66.9)
                        ->where('weight','>=',60)         
                        ->get();

            $huevo=  Egg::orderByDesc('id_egg') 
                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                        ->where('distributor_id',$distribuidora) 
                        ->where('weight','<=',66.9)
                        ->where('weight','>=',60) 
                        ->first();
                        //dd($huevo);
        }





        $cantidadHuevos  = $cantidadHuevos->count();

  
        // if ($tipo>=78) {
        // $clasificaion='Jumbo';

        // } else if($tipo<=67 && $tipo>=77.9 ) {
        // $clasificaion='AAA';

        // }else if($tipo>=60 && $tipo<=66.9  ) {
        // $clasificaion='AA';

        // }else if($tipo>=53 && $tipo<=59.9 ) {
        // $clasificaion='A';

        // }else if($tipo>=46.0  && $tipo<=52.9) {
        // $clasificaion='B';

        // }else  if($tipo<=46.0){
        // $clasificaion='C';

        // }



        $panales=round(($cantidadHuevos/35),1);

        return view('livewire.aa.reporte-aa',
                [
                    'cantidadHuevos' => $cantidadHuevos,
                    'huevo' => $huevo,
                    'panales' => $panales,
            
                ]);
        }

}

