<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tarea extends Component
{
    public $tarea;
    // public $index;
    // public $textTarea = [];  

    public function __construct($tarea)
    {
            $this->tarea = $tarea;
    }   
    //     $this->index = $index;
    //     $this->textTarea = $textTarea;

    // public function edit()
    // {
    //     dd('aa');
    // }

    
    // public function setIndex($index)
    // {
    //     $this->index = $index;
    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tarea');
    }
}
