<div>
    @if ($foto)
        <img class="rounded-full object-cover w-40 h-40 mx-auto" src="{{ url("storage/{$foto}") }}">
    @endif
</div>
<div>
    <x-label for="nome" value="{{ __('Nome') }}" />
    <x-input wire:model='nome' id="nome" class="block mt-1 w-full" type="text" name="nome"
        value="{{ old('nome') }}" required autofocus autocomplete="nome" />
</div>
<div class="mt-4">
    <x-label for="endereco" value="{{ __('Endereço') }}" />
    <x-input wire:model='endereco' id="endereco" class="block mt-1 w-full" type="text" name="endereco"
        value="{{ old('endereco') }}" required autofocus autocomplete="endereco" />
</div>
<div class="mt-4">
    <x-label for="bairro" value="{{ __('Bairro') }}" />
    <x-input wire:model='bairro' id="bairro" class="block mt-1 w-full" type="text" name="bairro"
        value="{{ old('bairro') }}" required autofocus autocomplete="bairro" />
</div>
<div class="mt-4">
    <x-label for="celular" value="{{ __('Celular') }}" />
    <x-input wire:model='celular' id="celular" class="block mt-1 w-full" type="text" name="celular"
        value="{{ old('celular') }}" required autofocus autocomplete="celular" />
</div>
<div class="mt-4">
    <x-label for="idade" value="{{ __('Nascimento') }}" />
    <x-input wire:model='idade' id="idade" class="block mt-1 w-full" type="date" name="idade"
        value="{{ old('idade') }}" required autofocus autocomplete="idade" />
</div>
<div wire:ignore class="mt-4">
    <x-label for="grupos" value="{{ __('Grupos') }}" />
    <select wire:model="group" name="grupos" id="grupos"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
        <option value="">{{ 'Selecione Grupo' }}</option>
        @foreach ($groups as $group)
            <option value="{{ $group }}">{{ $group }}</option>
        @endforeach
    </select>
</div>
<div class="mt-4">
    <x-label for="condicao" value="{{ __('Condição') }}" />
    <select name="condicao" wire:model='cond'
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
        <option value=""">Selecione Condição</option>
        @foreach ($conds as $cond)
            <option value="{{ $cond }}">{{ $cond }}</option>
        @endforeach
    </select>
</div>
<div class="mt-4">
    <x-label for="observacao" value="{{ __('Observações') }}" />
    <textarea type="text" wire:model='observacao' name="observacao"
        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="4">{{ old('observacao') }}
    </textarea>
</div>
