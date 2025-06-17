<?php

namespace App\Livewire;

use Livewire\Component;

class ShareLink extends Component
{
    public $section = 0, $about = 'En BEIT Perú, somos un aliado estratégico para empresas que buscan transformar y optimizar sus procesos mediante soluciones tecnológicas de vanguardia. Nos especializamos en ciberseguridad, desarrollo web y móvil, marketing digital e infraestructura en la nube, y más,  ofreciendo servicios integrales que mejoran la eficiencia, competitividad y seguridad de las empresas.', $title = 'More', $show = 0;

    protected $listeners = ['section' => 'section'];

    public function section(int $section)
    {
        $this->section = $section ?? 0;
    }

    public function show_text($number)
    {
        $this->show = $number;
        if ($this->show != 1) {
            $this->title = 'Less';
            $this->show = 1;
        } else {
            $this->title = 'More';
            $this->show = 0;
        }
    }

    public function close()
    {
        $this->section = 0;
    }
    public function render()
    {
        return view('livewire.share-link');
    }
}
