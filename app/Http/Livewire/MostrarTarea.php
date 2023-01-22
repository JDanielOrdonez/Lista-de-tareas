<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarTarea extends Component
{

    public $tarea = [];      
    // public $textTarea;         
    // public $ho;

    protected $listeners = [
        'eliminarTarea',
        'editarTarea',
        'tareaCreada' => 'agregarTarea'
    ];


    public function agregarTarea($tarea)
    {
        $this->tarea[] = $tarea;
    }
    
    public function eliminarTarea(Tarea $tarea)
    {
        $tarea->delete();
    }    
    
    public function render()
    {      
        //agregae mas consultas aqui, guardar el texto, id y fecha en variables public diferentes  
        $tareas = Tarea::when($this->tarea, function($query){
            $query->where('user_id', auth()->user()->id);
        })->paginate(21);

        // dd($tareas[0]->tarea);
        // $this->ho = $tareas[0]->tarea;
        
        return view('livewire.mostrar-tarea', [
            'tareas' => $tareas,
        ]);
    }
}
