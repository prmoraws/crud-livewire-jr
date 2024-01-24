<?php

namespace App\Livewire;

use App\Models\Membro;
use Illuminate\Http\Request;
use Livewire\Component;

class Update extends Component
{
    public $nome, $endereco, $bairro, $celular, $idade, $group, $cond, $observacao, $foto;


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
    public function render(Request $request)
    {
        $membro = Membro::find($request->id);
        $this->foto = $membro->foto;
        $this->nome = $membro->nome;
        $this->endereco = $membro->endereco;
        $this->bairro = $membro->bairro;
        $this->celular = $membro->celular;
        $this->idade = $membro->idade;
        $this->group = $membro->grupo;
        $this->cond = $membro->condicao;
        $this->observacao = $membro->observacao;


        return view('livewire.update');
    }
}
