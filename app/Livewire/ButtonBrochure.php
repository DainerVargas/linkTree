<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonBrochure extends Component
{
    public $view = '', $section = 0;

    public function show()
    {
        return redirect()->route('brochure');
    }
    
    public function show_section($section){
        
        $this->section = $section;
        $this->dispatch('section', $this->section);
   } 


    public function render()
    {
        return view('livewire.button-brochure');
    }
}
