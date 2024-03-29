@section('title', 'Editar')
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{-- <x-authentication-card-logo /> --}}
        </x-slot>
        <x-validation-errors class="mb-4" />
        <form method="" wire:submit.prevent="update">
            <fieldset>
                @csrf
                @include('components.form-membro')
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('membros') }}">
                        {{ __('Retornar à lista de Membros') }}
                    </a>
                    <x-button class="ms-4">
                        {{ __('Atualizar') }}
                    </x-button>
                </div>
            </fieldset>
            <div class="mt-4 flex items-center justify-end">
                <x-danger-button type="button" class="ms-4 " wire:confirm="Tem certeza?" wire:click="delete">
                    {{ __('Deletar') }}
                </x-danger-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
