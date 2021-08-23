<?php

namespace App\Http\Livewire\Miperfil;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class MiPerfil extends Component
{

        use WithPagination;
        use WithFileUploads;
        
        protected $paginationTheme = 'bootstrap';
    
      
    
        public $primary,$name,$nombre,$img,$email,$password,$imagen,$rol_id,$distribuidora_id,$estadoEdit;
    
    
    
         public function render(){

            $editar= User::where('id',Auth::User()->id)->first();
            //dd($editar->rol_id);
    
            $this->nombre = $editar->name;
            $this->img=$editar->profile_photo_path;
    
             return view('livewire.miperfil.mi-perfil',[
                        //'user' => $user,
                      
            ]);
         }
    
        public function edit(){
           
          $editar= User::where('id',Auth::User()->id)->first();
            //dd($editar);
            $this->estadoEdit = 1;

    
            $this->primary = $editar->id;
            $this->name = $editar->name;
            $this->email = $editar->email;
            $this->password = '******';
            $this->imagen=$editar->profile_photo_path;
           
    
        }
        public function update($id){
         

             $guardar= User::find($id); 
    
            $guardar->name=$this->name;  
            $guardar->email=$this->email;
            if ($this->password!='******') {
              
                $guardar->password=Hash::make($this->password);
            }

            if (is_file($this->imagen)) {
                $file=$this->imagen;
                $nameImagen = time().$file->getClientOriginalName();            
                $guardar->profile_photo_path=$nameImagen;
                $file->storeAs('img/users/', $nameImagen, 'public_uploads');   
             }else{
                $guardar->profile_photo_path=$this->imagen; 
             }

            //$guardar->profile_photo_path=$this->profile_photo_path;
            //$guardar->rol_id=$this->rol_id;
          //  $guardar->distribuidora_id=$this->distribuidora_id;
            
            $guardar->update();
            $this->dispatchBrowserEvent('alert',
            ['type' => 'success',  'message' => ''.$this->name.', Fue actualizado con Exito! ']);

            return redirect('/MiPerfil');
           // $this->cancelar();
            
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
            return redirect('/MiPerfil');
        }
    
     
    }
    