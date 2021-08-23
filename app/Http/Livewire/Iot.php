<?php

namespace App\Http\Livewire;

use App\Models\Distributor;
use App\Models\Iot as Iots;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Iot extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

  

    public $primary,$nameIot,$status,$distributor_id;


     public function render()
     {
        $rol_user= Auth::User()->rol_id;
        $distribuidora= Auth::User()->distribuidora_id;

        if ($rol_user==1) {
            $consultas=  DB::table('iots')
                ->join('distributors', 'distributors.id_distributor', 'iots.distributor_id')
                ->paginate();
            $distribuidoras = Distributor::all();


        }else{
            $consultas=  DB::table('iots')
                        ->join('distributors', 'distributors.id_distributor', 'iots.distributor_id')
                        ->where('distributor_id',$distribuidora)  
                        ->paginate();
        $distribuidoras = Distributor::where('id_distributor',$distribuidora)->get();

            
        }


         return view('livewire.iot',[
            'consultas' => $consultas,
            'distribuidoras' => $distribuidoras,
        ]);
     }

    
    public function store(){

        $this->validate([
            'nameIot' => 'required|min:3',
            'status' => 'required',
            'distributor_id' => 'required',
             ]);

       
             $guardar = new Iots();
             $guardar->nameIot=$this->nameIot;
             $guardar->status=$this->status;
             $guardar->distributor_id=$this->distributor_id;
           

             $guardar->save();  
            $this->dispatchBrowserEvent('alert',
                ['type' => 'info',  'message' => 'Registro guardado con Exito!  🌝']);
            $this->cancelar();
    }

    public function edit($id){
        //$this->updateMode = true;
        $editar= Iots::where('id_iot',$id)->first();

        $this->primary = $id;
        $this->nameIot = $editar->nameIot;
        $this->status = $editar->status;
        $this->distributor_id=$editar->distributor_id;

    }
    public function update($id)
    {
        $this->validate([
            'nameIot' => 'required|min:3',
            'status' => 'required',
            'distributor_id' => 'required',
             ]);
            
        // dd($this->imagen_id);
        $guardar= Iots::where('id_iot',$id)->first(); 

        $guardar->nameIot=$this->nameIot;  
        $guardar->status=$this->status;
        $guardar->distributor_id=$this->distributor_id;
        
        $guardar->update();
        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => ''.$this->nameIot.', Fue actualizado con Exito! ']);
 
        $this->cancelar();
        
    }

    public  function destroy($id){
        Iots::destroy($id);            
        $this->dispatchBrowserEvent('alert',
        ['type' => 'info',  'message' => 'Eliminado con Exito!  🌝']);
        $this->cancelar();
    }

    public function cancelar(){
        $this->nameIot = '';
        $this->status = '';
        $this->distributor_id = '';
 
        return redirect('/iot');
    }

}
