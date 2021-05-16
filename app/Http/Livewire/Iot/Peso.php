<?php

namespace App\Http\Livewire\Iot;

use App\Models\Egg;
use App\Models\Iot\Peso as IotPeso;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Peso extends Component
{
    use WithPagination;
    public function render()
    {
        $consultas=  DB::table('eggs')
        ->join('iots', 'iots.id_iot', 'eggs.iots_id')
        ->orderByDesc('eggs.id_egg')
        ->paginate(20);
        //dd($consultas);
        return view('livewire.iot.peso',[
            'consultas' => $consultas,
        ]);
    }
}
