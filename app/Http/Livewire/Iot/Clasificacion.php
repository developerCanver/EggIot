<?php

namespace App\Http\Livewire\Iot;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Clasificacion extends Component
{
    public function render()
    {

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


    
    // public function store(){

    //     $this->validate([
    //         'nameDistributor' => 'required|min:3',
    //         'phone' => 'required',
    //         'direction' => 'required|min:3',
            
    //          ]);
            
    //          $guardar = new Distributor();
    //          $guardar->nameDistributor=$this->nameDistributor;
    //          $guardar->phone=$this->phone;
    //          $guardar->img='';
    //          $guardar->direction=$this->direction;
       

    //          $guardar->save();  
    //     $this->dispatchBrowserEvent('alert',
    //          ['type' => 'info',  'message' => 'Registro guardado con Exito!  🌝']);
    //      $this->cancelar();
    // }
    // public function edit($id){
    //     $this->updateMode = true;
    //     $editar= Distributor::where('id_distributor',$id)->first();
      
    //     $this->primary = $id;
    //     $this->nameDistributor = $editar->nameDistributor;
    //     $this->phone = $editar->phone;
    //     $this->img = $editar->img;
    //     $this->direction=$editar->direction;
  
    // }
    // public function update($id)
    // {
    //    // dd($id);
    //     $this->validate([
    //         'nameDistributor' => 'required|min:3',
    //         'phone' => 'required',
    //         'direction' => 'required|min:3',
         
    //          ]);
    //     // dd($this->imagen_id);
    //      $guardar=Distributor::where('id_distributor',$id)->first();

    //     $guardar->nameDistributor=$this->nameDistributor;  
    //     $guardar->phone=$this->phone;
    //     $guardar->img=$this->img;
    //     $guardar->direction=$this->direction;
      
        
    //     $guardar->update();
    //     $this->dispatchBrowserEvent('alert',
    //     ['type' => 'success',  'message' => ''.$this->nameDistributor.', Fue actualizado con Exito! ']);
 
    //     $this->cancelar();
        
    // }

    // public  function destroy($id){
    //     Distributor::destroy($id);            
    //     $this->dispatchBrowserEvent('alert',
    //     ['type' => 'info',  'message' => 'Eliminado con Exito!  🌝']);
    //     $this->cancelar();
    // }

    // public function cancelar(){
    //     $this->nameDistributor = '';
    //     $this->phone = '';
    //     $this->img = '';
    //     $this->direction = '';
    //     return redirect('/distribuidora');
    // }
}
