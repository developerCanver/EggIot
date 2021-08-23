<?php

namespace App\Http\Livewire\Iot;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Clasificacion extends Component
{
    public function render()
    {

        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;

        if ($rol_user==1) {
            $Jumbo=  DB::table('eggs')  
            ->where('weight', '>' , 78)           
            ->get();
    
            $AAA=  DB::table('eggs')  
            ->whereBetween('weight', [68,77.9])           
            ->get();
            $AA=  DB::table('eggs')  
            ->whereBetween('weight', [60,66.9])           
            ->get();
            $A=  DB::table('eggs')  
            ->whereBetween('weight', [53,59.9])           
            ->get();
            $B=  DB::table('eggs')  
            ->whereBetween('weight', [46,52.9])           
            ->get();
            $C=  DB::table('eggs')  
            ->where('weight', '<' , 46)            
            ->get();

        }else{
            $Jumbo=  DB::table('eggs')  
            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
            ->where('distributor_id',$distribuidora) 
            ->where('weight', '>' , 78)           
            ->get();
    
            $AAA=  DB::table('eggs')  
            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
            ->where('distributor_id',$distribuidora) 
            ->whereBetween('weight', [68,77.9])           
            ->get();

            $AA=  DB::table('eggs')  
            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
            ->where('distributor_id',$distribuidora) 
            ->whereBetween('weight', [60,66.9])           
            ->get();

            $A=  DB::table('eggs')  
            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
            ->where('distributor_id',$distribuidora) 
            ->whereBetween('weight', [53,59.9])           
            ->get();

            $B=  DB::table('eggs')  
            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
            ->where('distributor_id',$distribuidora) 
            ->whereBetween('weight', [46,52.9])           
            ->get();
            
            $C=  DB::table('eggs')  
            ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
            ->where('distributor_id',$distribuidora) 
            ->where('weight', '<' , 46)            
            ->get();
            
        }

 
                        
  


        $jumbo  = $Jumbo->count();
        $AAA    = $AAA->count();
        $AA     = $AA->count();
        $A      = $A->count();
        $B     = $B->count();
        $C      = $C->count();
        //dd($AAA);
        return view('livewire.iot.clasificacion',
                    [
                           'jumbo' => $jumbo,
                           'AAA' => $AAA,
                           'AA' => $AA,
                           'A' => $A,
                           'B' => $B,
                           'C' => $C,
                    ]);
    }

}
