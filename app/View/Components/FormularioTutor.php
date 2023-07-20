<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormularioTutor extends Component
{
    public $tutor;
    public $animals;
    public $readonly;

    public function __construct($tutor, $animals, $readonly = false)
    {
        $this->tutor = $tutor;
        $this->animals = $animals;
        $this->readonly = $readonly;
    }

    public function render()
    {
        return view('components.formulario-tutor');
    }
}
