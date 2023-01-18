<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarTarea extends Component
{

    public $tarea = [];       
    public $color = 'bg-white'; 
    public $textTarea;     
    

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
    public function editarTarea()
    {        
    }
    
    public function render()
    {                
        $tareas = Tarea::when($this->tarea, function($query){
            $query->where('user_id', auth()->user()->id);
        })->paginate(21);       
        
        return view('livewire.mostrar-tarea', [
            'tareas' => $tareas,
            'color' => $this->color
        ]);
    }
}
