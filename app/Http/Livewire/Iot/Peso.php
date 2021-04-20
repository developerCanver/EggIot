<?php

namespace App\Http\Livewire\Iot;

use App\Models\Iot\Peso as IotPeso;
use Livewire\Component;

class Peso extends Component
{
    public function render()
    {
        $consultas= IotPeso::all();
        //dd($consultas);
        return view('livewire.iot.peso',[
            'consultas' => $consultas,
        ]);
    }
}
