<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarTarea extends Component
{

    public $tarea = [];   
    // public $textTarea = [];          
    public $vacante_id = 60;
    // public $ho;

    protected $listeners = [
        'eliminarTarea',
        'tareaCreada' => 'agregarTarea'
    ];


    public function agregarTarea($tarea)
    {
        $this->tarea[] = $tarea;
    }
    
    public function editarTarea()
    {
        // $text = $this->textTarea[$this->index];
        // dd($this->textTarea[0]);


        // $tarea = Tarea::find($this->vacante_id);
        // $tarea->tarea = $this->textTarea.'9';

        // $tarea->save();
    
        dd('a');
    }

    public function eliminarTarea(Tarea $tarea)
    {
        $tarea->delete();
    }    
    
    public function render()
    {      
        //agregae mas consultas aqui, guardar el texto, id y fecha en variables public diferentes  
        // $tareas = Tarea::when($this->tarea, function($query){
        //     $query->where('user_id', auth()->user()->id);
        // })->paginate(21);

        $tareas = Tarea::when($this->tarea, function($query){
            $query->where('user_id', auth()->user()->id);
        })->paginate(21);

        $this->textTarea = $tareas->pluck('tarea')->toArray();
        // dd($this->textTarea);
        

        return view('livewire.mostrar-tarea', [
            'tareas' => $tareas,
        ]);
    }
}
