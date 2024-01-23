<?php

namespace App\Livewire;

use App\Models\Membro;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class Foto extends Component
{
    use WithFileUploads;

    public $foto;
    public $nome;
    public function save()
    {

        $this->validate([
            'foto' => 'required|image|max:1024'
        ]);

        //cutomizar um nome para salvar o arquivo de foto
        if (session('nome')) {
           $nome = session('nome');

        }
        //constroi o nome.
        $nameFile = Str::slug(session('nome') ?? $this->nome) . '.' . $this->foto->getClientOriginalExtension();

        if ($phath = $this->foto->storeAs('membros',  $nameFile)) {
            //coloca a foto, se vier do select ou da sessão.
           Membro::where('nome', $this->nome ?? $nome)->update([
            'foto' => $phath
           ]);

           return redirect('membros')->with('status', 'Foto salva');

        }
    }
    public function render()
    {
        return view('livewire.foto', [
            'membros' => Membro::all()
        ]);
    }
}
