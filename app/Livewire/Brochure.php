<?php

namespace App\Livewire;

use Livewire\Component;

class Brochure extends Component
{

    public $pdfPath, $view = false;
    protected $listeners = ['view' => 'view'];

    public function view($view)
    {
        $this->view = $view;
    }

    public function mount($pdfPath = null)
    {
        $this->pdfPath = $pdfPath ?? '/Document/BrochureBEIT2025.pdf';
    }

    public function close()
    {
        $this->view = false;
    }

    public function render()
    {
        return view('livewire.brochure');
    }
}
