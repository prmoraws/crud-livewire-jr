<?php

namespace App\Livewire;

use Livewire\Component;

class CreateMembros extends Component
{

    public $groups = [
        'Evangelização',
        'Universal nos Presídios',
        'Calebe',
        'Grupo da Saúde',
        'Arimateia',
        'Força Jovem Universal',
        'Força Teen Universal',
        'Resgate Universal',
        'Terapia do Amor',
        'Universal Socioeducativo',
        'Vício Tem Cura',
        'Depressão Tem Cura'
    ];
    public $conds = [
        'Obreiro',
        'Colaborador',
        'CPO',
        'Batizado nas Águas',
        'Frequentador',
        'Convidado',
        'Primeira Vez',
        'Atendimento',
        'Visita',
        'Afastado'
    ];




    public function render()
    {
        return view('livewire.create-membros');
    }
}
