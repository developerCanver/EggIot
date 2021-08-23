<?php

namespace App\Http\Livewire\Inicio;

use App\Models\Egg;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GraficaHuevos extends Component
{
    public $de='' ,$hasta='';

    protected $queryString = ['de','hasta'];
    public function render()
    {

        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;
       
        if ($rol_user==1) {
        $consPesos =  DB::table('eggs')                   
                    ->orderByDesc('eggs.id_egg')
                    ->select(
                    'weight',
                    )
                    ->get();
        $consfechas =  Egg::orderByDesc('eggs.id_egg')
                ->select(
                'created_at',
                )
                //->where('created_at', $this->de)
                ->Fecha($this->de,$this->hasta)
                ->get();

        }else{

        $consPesos =  DB::table('eggs')    
                  ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                  ->where('distributor_id',$distribuidora)                     
                ->orderByDesc('eggs.id_egg')
                
                ->select(
                'weight',
                )
                ->get();
                

        $consfechas =  Egg::orderByDesc('eggs.id_egg')
                ->join('iots as i', 'i.id_iot', 'eggs.iots_id')  
                ->where('distributor_id',$distribuidora)  
                ->select(
                'eggs.created_at',
                )
                //->where('created_at', $this->de)
                ->Fecha($this->de,$this->hasta)
                ->get();
             
    
            }
                $pesos=array();//ventas
                foreach ($consPesos as $conspeso){
                    $pesos[]=$conspeso->weight;                    
                }
                $fechas=array();//ventas
                foreach ($consfechas as $consfecha){
                    $fechas[]=Carbon::createFromFormat('Y-m-d H:i:s', $consfecha->created_at)->format('d-m-Y H:i');                    
                   // $fechas[]=$consfecha->created_at;                    
                }
                
                $fechas= json_encode($fechas);
                $pesos= json_encode($pesos);
                //dd($pesos);
           
        return view('livewire.inicio.grafica-huevos',[
            'pesos' => $pesos,
            'fechas' => $fechas,
        ]);
    }
 
}
