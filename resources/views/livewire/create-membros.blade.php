<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="">
            @csrf

            <div>
                <x-label for="nome" value="{{ __('Nome') }}" />
                <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required
                    autofocus autocomplete="nome" />
            </div>
            <div class="mt-4">
                <x-label for="endereco" value="{{ __('Endereço') }}" />
                <x-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')"
                    required autofocus autocomplete="endereco" />
            </div>
            <div class="mt-4">
                <x-label for="bairro" value="{{ __('Bairro') }}" />
                <x-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')"
                    required autofocus autocomplete="bairro" />
            </div>
            <div class="mt-4">
                <x-label for="celular" value="{{ __('Celular') }}" />
                <x-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')"
                    required autofocus autocomplete="celular" />
            </div>
            <div class="mt-4">
                <x-label for="idade" value="{{ __('Nascimento') }}" />
                <x-input id="idade" class="block mt-1 w-full" type="date" name="idade" :value="old('idade')"
                    required autofocus autocomplete="idade" />
            </div>
            <div class="mt-4">
                <x-label for="idade" value="{{ __('Grupo') }}" />
                <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    @foreach ($groups as $key => $group)
                        <option value="{{ $key }}">{{ $group }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <x-label for="idade" value="{{ __('Condição') }}" />
                <select class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    @foreach ($conds as $key => $cond)
                        <option value="{{ $key }}">{{ $cond }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <x-label for="observacao" value="{{ __('Observações') }}" />
                <textarea class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="observacao" rows="4">{{ old('observacao') }}
            </textarea>
            </div>
            <div class="mt-4" class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('membros') }}">
                    {{ __('Retornar à lista de Membros') }}
                </a>
                <x-button class="ms-4">
                    {{ __('Salvar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
