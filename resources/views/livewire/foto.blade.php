@section('title', 'Foto')


<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Foto do Membro') }}
    </h2>
</x-slot>


<div class="grid mt-4 place-items-center">
    <x-validation-errors class="mb-4" />
    <form class="mt-4" wire:submit="save">
        <!-- Profile Photo -->

        <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" id="foto" class="hidden" wire:model.live="foto" x-ref="foto"
                x-on:change="
                                photoName = $refs.foto.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.foto.files[0]);
                        " />
            <div wire:ignore class="mt-4 text-center">
                <x-label for="nome" value="{{ __('Membro selecionado') }}" />
                <select wire:model="nome" name="nome" id="nome"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    @if (session('nome'))
                        <option value="{{ session('nome') }}">{{ session('nome') }}</option>
                    @else
                        <option value="">Selecione Membro</option>
                        @foreach ($membros as $membro)
                            <option value="{{ $membro->nome }}">{{ $membro->nome }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <!-- Current Profile Photo -->
            <div class="mt-4" x-show="! photoPreview">
                <img src="{{ url('storage/' . $foto_src) }}" class="rounded-full h-40 w-40 object-cover mx-auto">
            </div>
            <!-- New Profile Photo Preview -->
            <div class="mt-4 object-center" x-show="photoPreview" style="display: none;">
                <span class="block rounded-full w-40 h-40 bg-cover bg-no-repeat bg-center mx-auto"
                    x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-secondary-button class="w-full mt-4 justify-center" type="button"
                x-on:click.prevent="$refs.foto.click()">
                {{ __('Carregar Foto') }}
            </x-secondary-button>
            <x-input-error for="foto" class="mt-2" />
            <div hidden wire:model=$nome></div>
            <div class="mt-1">
                <x-button class="mt-1 w-full justify-center" type="submit">
                    {{ __('Salve') }}
                </x-button>
            </div>

        </div>

    </form>

</div>
