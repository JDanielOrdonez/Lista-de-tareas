<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tarea extends Component
{
    public $tarea;

    public function __construct($tarea)
    {
        $this->tarea = $tarea;
    }    

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
