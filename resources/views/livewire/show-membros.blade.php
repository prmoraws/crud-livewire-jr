@section('title', 'Membros')

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Membros') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-table wire:loading.class="opacity-75">
                <x-slot name="header">
                    <x-table.header sortable wire:click.prevent="sortBy('nome')" :direction="$sortField === 'nome' ? $sortDirection : null">Nome</x-table.header>
                    <x-table.header sortable wire:click.prevent="sortBy('celular')"
                        :direction="$sortField === 'email' ? $sortDirection : null">Celular</x-table.header>
                    <x-table.header>Ver</x-table.header>
                </x-slot>
                <x-slot name="body">
                    @forelse ($membros as $key => $membro)
                        <x-table.row @class($membro->id % 2 == 0 ? 'bg-slate-200' : 'bg-white')>
                            <x-table.cell>{{ $membro->nome }}</x-table.cell>
                            <x-table.cell> {{ $membro->celular }}</x-table.cell>
                            <x-table.cell>
                                <a href="#"
                                    class="inline-flex items-center justify-center w-8 h-8 mr-2 text-pink-100 transition-colors duration-150 bg-blue-700 rounded-full focus:shadow-outline hover:bg-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path strokeLinecap="round" strokeLinejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                </a>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan=4>
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-400 text-xl">
                                        Nenhum dado encontrado...
                                    </span>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>
            @if ($membros->hasPages())
                <div class="p-3">
                    {{ $membros->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
