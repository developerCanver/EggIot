<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Usuario extends Component
{
    public $name,$email,$rol_id,$profile_photo_path;
    public function render()
    {
        return view('livewire.usuario');
    }
}
