<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Inicio extends Component
{
    public function render()
    {
        $huevos=  DB::table('eggs')           
                    ->get();

        $usuarios=  DB::table('users')           
                        ->get();  
        $distribuidoras=  DB::table('distributors')           
                         ->get();
        $huevos  = $huevos->count();
        $usuarios    = $usuarios->count();
        $distribuidoras     = $distribuidoras->count();
        $panales=round(($huevos/35),1);

        return view('livewire.inicio',
                    [
                           'huevos' => $huevos,
                           'usuarios' => $usuarios,
                           'distribuidoras' => $distribuidoras,
                           'panales' => $panales,
                      
                    ]);
      
    }
}
