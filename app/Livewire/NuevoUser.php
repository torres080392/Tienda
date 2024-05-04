<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class NuevoUser extends Component
{

    public $role;
    public $name;
    public $email;
    public $password;
    public $mensaje = false ;

    public function createUser()
    {
        User::create([
            'role' => $this->role,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset();
        //modal de confirmacion
        $this->mensaje = true;


    }


    //cerramos el modal del mensaje
    public function closeModalMensaje(){

     $this->mensaje = false ;

    }



    public function render()
    {
        return view('livewire.nuevo-user');
    }
}
