<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CreateMembros extends Component
{
    public $nome, $endereco, $bairro, $celular, $idade, $group, $cond, $observacao;

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
        'Depressão Tem Cura',
        'Não está em um grupo'
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

    public function create()
    {
        Membro::create([
            'user_id' =>  Auth::user()->id,
            'nome' => $this->nome,
            'celular' => $this->celular,
            'idade' => $this->idade,
            'endereco' => $this->endereco,
            'bairro' => $this->bairro,
            'condicao' => $this->cond,
            'grupo' => $this->group,
            'observacao' => $this->observacao
        ]);

        session()->put('nome', $this->nome);

        return redirect('foto');
    }



    public function render()
    {
        return view('livewire.create-membros');
    }
}
