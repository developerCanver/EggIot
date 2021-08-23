<?php

namespace App\Http\Livewire;

use App\Models\Egg;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Inicio extends Component
{
    public function render()
    {
        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;

   
       
        if ($rol_user==1) {

            $huevos=  DB::table('eggs')           
                        ->get();

            $huevo=  Egg::orderByDesc('id_egg')           
                            ->first();
        }else{

            $huevos=  DB::table('eggs')  
                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                        ->where('distributor_id',$distribuidora)       
                        ->get();

            $huevo=  DB::table('eggs')  
                            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                            ->where('distributor_id',$distribuidora)  
                            ->orderByDesc('id_egg')           
                            ->first();
                            //dd($huevo);
        }
      

        $huevos  = $huevos->count();
        $clasificaion='';
        if ($huevo) {
            $tipo= $huevo->weight;
            
        
                if ($tipo>=78) {
                    $clasificaion='Jumbo';

                } else if($tipo<=67 && $tipo>=77.9 ) {
                    $clasificaion='AAA';

                }else if($tipo>=60 && $tipo<=66.9  ) {
                    $clasificaion='AA';

                }else if($tipo>=53 && $tipo<=59.9 ) {
                    $clasificaion='A';

                }else if($tipo>=46.0  && $tipo<=52.9) {
                    $clasificaion='B';

                }else  if($tipo<=46.0){
                    $clasificaion='C';

                }
        }
        
        $panales=round(($huevos/35),1);

        return view('livewire.inicio',
                    [
                           'huevos' => $huevos,
                           'huevo' => $huevo,
                           'panales' => $panales,
                           'clasificaion' => $clasificaion,
                      
                    ]);
      
    }
}
