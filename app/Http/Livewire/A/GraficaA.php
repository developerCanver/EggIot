<?php

namespace App\Http\Livewire\A;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class GraficaA extends Component
{
    public $de='' ,$hasta='';

    protected $queryString = ['de','hasta'];
    public function render()
    {
        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;

        if ($rol_user==1) {
            $consultas =  DB::table('eggs')                   
            ->orderByDesc('eggs.id_egg')
            ->where('weight','<=',59.9)
            ->where('weight','>=',53) 
            ->select(
            'weight',
            'created_at',

            )
            ->get();

        }else{
            $consultas =  DB::table('eggs')   
            ->join('iots as i', 'i.id_iot', '.iots_id')  
            ->where('distributor_id',$distribuidora)                 
            ->orderByDesc('eggs.id_egg')
            ->where('weight','<=',59.9)
            ->where('weight','>=',53) 
            ->select(
            'weight',
            'eggs.created_at',

            )
            ->get();
            
        }

 


   
                $pesos=array();
                $fechas=array();

                foreach ($consultas as $consulta){
                    $pesos[]=$consulta->weight;
                    $fechas[]=Carbon::createFromFormat('Y-m-d H:i:s', $consulta->created_at)->format('d-m-Y H:i');                    

                }
      
                $fechas= json_encode($fechas);
                $pesos= json_encode($pesos);
                //dd($pesos);

        return view('livewire.a.grafica-a',[
            'pesos' => $pesos,
            'fechas' => $fechas,
        ]);
    }
 
}
