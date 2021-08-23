<?php

namespace App\Http\Livewire\B;

use App\Models\Egg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class ReporteB extends Component
{

 

        public function render()
        {
                $rol_user= Auth::User()->rol_id;
                $distribuidora= Auth::User()->distribuidora_id;
        
                if ($rol_user==1) {
                        $cantidadHuevos=  DB::table('eggs') 
                        ->where('weight','<=',52.9)
                        ->where('weight','>=',46)         
                        ->get();

                        $huevo=  Egg::orderByDesc('id_egg') 
                                        ->where('weight','<=',52.9)
                                        ->where('weight','>=',46) 
                                        ->first();
                                        //dd($huevo);
        
                }else{
                        $cantidadHuevos=  DB::table('eggs') 
                                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                                                ->where('distributor_id',$distribuidora)  
                                        ->where('weight','<=',52.9)
                                        ->where('weight','>=',46)         
                                        ->get();

                        $huevo=  Egg::orderByDesc('id_egg') 
                        ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                                        ->where('distributor_id',$distribuidora)  
                                        ->where('weight','<=',52.9)
                                        ->where('weight','>=',46) 
                                        ->first();
                                        //dd($huevo);
                    
                }
        
    
            $cantidadHuevos  = $cantidadHuevos->count();
    

            $panales=round(($cantidadHuevos/35),1);
    
            return view('livewire.b.reporte-b',
                    [
                        'cantidadHuevos' => $cantidadHuevos,
                        'huevo' => $huevo,
                        'panales' => $panales,
                
                    ]);
            }
    
    }
    