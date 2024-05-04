<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TablaUsers extends Component
{
   use WithPagination;


 public  $mensajeDelete = false ;
 
 //eliminamos un usuario
  public function delete($id){
      User::destroy($id);
      //mostramos el modal de usuario eliminado
      $this->mensajeDelete = true;
      
  }

  //cerramos el modal de mensaje de eliminado
  public function closeModalMensaje(){

    $this->mensajeDelete = false ;
  }



    public function render()
    {
        $users = User::Paginate(5);
        return view('livewire.tabla-users',compact('users'));
    }
}
