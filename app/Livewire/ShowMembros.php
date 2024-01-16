<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use App\Models\Membro;
use Livewire\Component;

class ShowMembros extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $bg = 'bg-slate-300';

    protected $queryString = ['sortField', 'sortDirection'];

    //Form Field
    public $rId = null;
    //Action
    public $dId = '';


    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ?
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc'
            : 'asc';
        $this->sortField = $field;
    }


    public function render()
    {
        return view('livewire.show-membros', [
            'membros' => Membro::orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage)
        ])->layout('layouts.app');
    }

}
