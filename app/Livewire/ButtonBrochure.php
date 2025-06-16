<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonBrochure extends Component
{
    public $view = false;

    public function show()
    {
        $this->view = true;
        $this->dispatch('view', $this->view);
    }



    public function render()
    {
        return view('livewire.button-brochure');
    }
}
