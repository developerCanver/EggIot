<?php

namespace App\Http\Livewire;

use App\Models\Distributor;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Support\Facades\DB;


class Distribuidora extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $isOpen=false;
  

    public $primary,$nameDistributor,$phone,$img,$user_id,$colorModal,$direction;

    public function mount(){
    
    }
    public function open(){
       // dd($this->isOpen);
        $this->isOpen=true;
     }

     public function close(){
        $this->isOpen=false;
     }

    public function render()
    {
       $consultas=  DB::table('distributors')
                    ->join('users', 'users.id', 'distributors.user_id')
                    ->paginate();
                    //dd($consultas);
       $users = DB::table('users')
                    ->where('rol_id', '1')
                    ->get();

        return view('livewire.distribuidora',[
            'consultas' => $consultas,
            'users' => $users,
        ]);

    }
    public function store(){

        $this->validate([
            'nameDistributor' => 'required|min:3',
            'phone' => 'required',
            'direction' => 'required|min:3',
            'user_id' => 'required',
             ]);
            
             $guardar = new Distributor();
             $guardar->nameDistributor=$this->nameDistributor;
             $guardar->phone=$this->phone;
             $guardar->img='';
             $guardar->direction=$this->direction;
             $guardar->user_id=$this->user_id;

             $guardar->save();  
        $this->dispatchBrowserEvent('alert',
             ['type' => 'info',  'message' => 'Registro guardado con Exito!  🌝']);
         $this->cancelar();
    }
    public function edit($id){
        $this->updateMode = true;
        $editar= Distributor::where('id_distributor',$id)->first();
      
        $this->primary = $id;
        $this->nameDistributor = $editar->nameDistributor;
        $this->phone = $editar->phone;
        $this->img = $editar->img;
        $this->direction=$editar->direction;
        $this->user_id=$editar->user_id;
       

    }
    public function update($id)
    {
       // dd($id);
        $this->validate([
            'nameDistributor' => 'required|min:3',
            'phone' => 'required',
            'direction' => 'required|min:3',
            'user_id' => 'required',
             ]);
        // dd($this->imagen_id);
         $guardar=Distributor::where('id_distributor',$id)->first();

        $guardar->nameDistributor=$this->nameDistributor;  
        $guardar->phone=$this->phone;
        $guardar->img=$this->img;
        $guardar->direction=$this->direction;
        $guardar->user_id=$this->user_id;
        
        $guardar->update();
        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => ''.$this->nameDistributor.', Fue actualizado con Exito! ']);
 
        $this->cancelar();
        
    }

    public  function destroy($id){
        Distributor::destroy($id);            
        $this->dispatchBrowserEvent('alert',
        ['type' => 'info',  'message' => 'Eliminado con Exito!  🌝']);
        $this->cancelar();
    }

    public function cancelar(){
        $this->nameDistributor = '';
        $this->phone = '';
        $this->img = '';
        $this->direction = '';
        $this->user_id = '';
        return redirect('/distribuidora');
    }

 
}
