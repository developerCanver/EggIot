<?php

namespace App\Http\Livewire;

use App\Models\Distributor;
use App\Models\RoleUser;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class Usuario extends Component
{
 
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

  

    public $primary,$name,$email,$password,$profile_photo_path,$rol_id,$distribuidora_id;



     public function render()
     {
        $consultas=  DB::table('users')
                    ->join('role_users', 'role_users.id_rol', 'users.rol_id')
                    ->leftJoin('distributors', 'distributors.id_distributor', 'users.distribuidora_id')
                    ->paginate(20);
       
        $distribuidoras = Distributor::all();
        $roles = RoleUser::all();

         return view('livewire.usuario',[
                    'consultas' => $consultas,
                    'roles' => $roles,
                    'distribuidoras' => $distribuidoras,
        ]);
     }

    
    public function store(){

        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:6',
            'rol_id' => 'required',
            'distribuidora_id' => 'required',
             ]);

       
             $guardar = new User();
             $guardar->name=$this->name;
             $guardar->email=$this->email;
             $guardar->password=Hash::make($this->password);
             $guardar->profile_photo_path=$this->profile_photo_path;
             $guardar->rol_id=$this->rol_id;
             $guardar->distribuidora_id=$this->distribuidora_id;

             $guardar->save();  
            $this->dispatchBrowserEvent('alert',
                ['type' => 'info',  'message' => 'Registro guardado con Exito!  🌝']);
            $this->cancelar();
    }

    public function edit($id){
        $this->updateMode = true;
        $editar= User::where('id',$id)->first();
        //dd($editar->rol_id);

        $this->primary = $id;
        $this->name = $editar->name;
        $this->email = $editar->email;
        $this->password = '******';
        $this->profile_photo_path=$editar->profile_photo_path;
        $this->rol_id=$editar->rol_id;
        $this->distribuidora_id=$editar->distribuidora_id;
       

    }
    public function update($id)
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|min:3',
            'password' => 'required|min:6',
            'rol_id' => 'required',
            'distribuidora_id' => 'required',
             ]);
            
        // dd($this->imagen_id);
         $guardar= User::find($id); 

        $guardar->name=$this->name;  
        $guardar->email=$this->email;
        $guardar->password=Hash::make($this->password);
        $guardar->profile_photo_path=$this->profile_photo_path;
        $guardar->rol_id=$this->rol_id;
        $guardar->distribuidora_id=$this->distribuidora_id;
        
        $guardar->update();
        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => ''.$this->name.', Fue actualizado con Exito! ']);
 
        $this->cancelar();
        
    }

    public  function destroy($id){
        User::destroy($id);            
        $this->dispatchBrowserEvent('alert',
        ['type' => 'info',  'message' => 'Eliminado con Exito!  🌝']);
        $this->cancelar();
    }

    public function cancelar(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->profile_photo_path = '';
        $this->rol_id = '';
        $this->distribuidora_id = '';
        return redirect('/usuarios');
    }

 
}
