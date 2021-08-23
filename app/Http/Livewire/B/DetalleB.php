<?php

namespace App\Http\Livewire\B;

use App\Models\Egg;
use App\Models\Iot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class DetalleB extends Component
{
  
           use WithPagination;
    
        public $id_egg ,$code,$weight,$iots_id ,$created_at;
        public function render()
        {
            $rol_user= Auth::User()->rol_id;
            $distribuidora= Auth::User()->distribuidora_id;
    
            if ($rol_user==1) {
                $consultas=  DB::table('eggs')
                ->join('iots', 'iots.id_iot', 'eggs.iots_id')
                ->where('weight','<=',52.9)
                ->where('weight','>=',46) 
                ->orderByDesc('eggs.id_egg')
                ->paginate(20);

                $distribuidoraIot= Iot::where('status', 1)
                                        ->orderBy('id_iot','desc')
                                        ->get();
    
            }else{
                $consultas=  DB::table('eggs')
                ->join('iots', 'iots.id_iot', 'eggs.iots_id')
                ->where('distributor_id',$distribuidora) 
                ->where('weight','<=',52.9)
                ->where('weight','>=',46) 
                ->orderByDesc('eggs.id_egg')
                ->paginate(20);

            $distribuidoraIot= Iot::where('status', 1)
            ->where('distributor_id',$distribuidora) 
                                    ->orderBy('id_iot','desc')
                                    ->get();
                
            }

        
            //dd($consultas);
            return view('livewire.b.detalle-b',[
                'consultas' => $consultas,
                'distribuidoraIot' => $distribuidoraIot,
            ]);
        }
        public function store(){
    
            $this->validate([
                'weight' => 'required',
                'iots_id' => 'required',
               
                 ]);
                 $guardar = new Egg();
                 $guardar->weight=$this->weight;
                 $guardar->iots_id=$this->iots_id;
                 
    
                 $guardar->save();  
                $this->dispatchBrowserEvent('alert',
                    ['type' => 'info',  'message' => 'Registro guardado con Exito!  🌝']);
                $this->cancelar();
        }
    
        public  function destroy($id){
            Egg::destroy($id);            
            $this->dispatchBrowserEvent('alert',
            ['type' => 'info',  'message' => 'Eliminado con Exito!  🌝']);
            $this->cancelar();
        }
    
        public function edit($id){
            $this->updateMode = true;
            $editar= Egg::where('id_egg',$id)->first();
     
            $this->id_egg = $id;
            $this->weight = $editar->weight;
            $this->iots_id = $editar->iots_id;
        
    
        }
    
        public function update($id)
        {
            $this->validate([
                'weight' => 'required',
                'iots_id' => 'required',
               
                 ]);
                
            // dd($this->imagen_id);
             $guardar= Egg::find($id); 
    
            $guardar->weight=$this->weight;  
            $guardar->iots_id=$this->iots_id;
            $guardar->update();
            $this->dispatchBrowserEvent('alert',
            ['type' => 'success',  'message' => ''.$this->weight.', Fue actualizado con Exito! ']);
     
            $this->cancelar();
            
        }
    
        public function cancelar(){
            $this->weight = '';
            $this->iots_id = '';
            return redirect('/DetalleB');
        }
    }
    
    