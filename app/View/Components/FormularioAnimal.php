<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormularioAnimal extends Component
{
    public $animal;
    public $species;
    public $readonly;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($animal, $species, $readonly = false)
    {
        $this->animal = $animal;
        $this->species = $species;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario-animal');
    }
}
