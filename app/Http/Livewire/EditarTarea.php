<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditarTarea extends Component
{
    public $tarea;    

    public function render()
    {
        return view('livewire.editar-tarea');
    }
}
