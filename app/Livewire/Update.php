<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Update extends Component
{
    public $nome, $endereco, $bairro, $celular, $idade, $group, $cond, $observacao, $foto, $membro, $id;


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
    public function render(Request $request)
    {
        $membro = Membro::find($request->id);
        $this->id = $membro->id;
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

    public function update()
    {

        DB::table('membros')
        ->where('id', $this->id)
        ->update([
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
}
