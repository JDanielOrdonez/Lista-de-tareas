<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class CrearTarea extends Component
{
    public $tarea;

    protected $rules = [        
        'tarea' => 'required|max:255'
    ];

    public function crearTarea()
    {
        // Validar.
        $datos = $this->validate();
        
        // Guardar tarea a la bd
        Tarea::create([
            'tarea' => $datos['tarea'],
            'user_id' => auth()->user()->id,
        ]);

        // llamar un listener
        $this->emit('tareaCreada', $datos['tarea']);

        // limpiar input
        $this->tarea = "";

        return redirect()->back();
    }
    public function render()
    {        
        return view('livewire.crear-tarea');
    }

}
