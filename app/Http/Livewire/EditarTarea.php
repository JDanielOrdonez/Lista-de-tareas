<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class EditarTarea extends Component
{
    public $tarea;    
    public $show = false;

    protected $rules = [
        'tarea.tarea' => 'required|max:255'
    ];

    protected $listeners = [
        'openModal'
    ];

    public function openModal(Tarea $tarea)
    {        
        $this->tarea = $tarea;
        $this->show = true;        
    }
    public function editarTarea()
    {
        // Validar
        $datos = $this->validate();
     
        // Guardar datos validados en tarea
        $this->tarea->tarea = $datos['tarea']['tarea'];

        // Guardar 
        $this->tarea->save();

        // Llamar a una funcion
        $this->emit('tareaCreada', $this->tarea->tarea);

        // Cerrar modal
        $this->show = false;
        
    }

    public function render()
    {
        return view('livewire.editar-tarea');
    }
}
