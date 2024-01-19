<?php

namespace App\Livewire;

use Livewire\Component;

class CreateMembros extends Component
{

    public $OpGrupo = [
        'EVG' => 'EVG',
        'UNP' => 'UNP',
        'Calebe' => 'Calebe',
        'S/G' => 'S/G'
    ];


    public function render()
    {
        return view('livewire.create-membros');
    }
}
