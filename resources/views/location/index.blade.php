<x-app-layout>
    <x-utils.card title="Tabela - Usuários" size="w-2/3">
        <div class="relative overflow-x-auto sm:rounded-lg">
            <div class="p-2 flex justify-between items-center">
                <div class="max-w-1/2">
                    <label for="table-search" class="sr-only">Buscar por Usuário</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs bg-gradient-to-b from-blue-500/50 to-blue-500/30 text-white uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Fechaduras vinculadas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cidade
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Endereço
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($locations as $item)
                        <tr class="text-xs bg-gradient-to-b from-blue-500/70 to-blue-500/50 text-white uppercase">
                            <th class="px-6 py-4">
                                {{ $item->locks->count() > 0 ? 'Vinculado a ' . $item->locks->count() . ' fechadura(s)' : 'Nenhuma fechadura vinculada.' }}
                            </th>
                            <th class="px-6 py-4">
                                {{ $item->city }}
                            </th>
                            <th class="px-6 py-4">
                                {{ $item->complete_address }}
                            </th>
                            <td class="flex px-6 py-4 gap-2">
                                <a href="#" type="button" class="text-white focus:ring ring-white focus:outline-none bg-black/30 shadow-lg duration-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-white focus:ring ring-white focus:outline-none bg-black/30 shadow-lg duration-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr class="text-xs bg-gradient-to-b from-blue-500/70 to-blue-500/50 text-white uppercase">
                        <th class="px-6 py-4" colspan="5">
                            Nenhum item localizado.
                        </th>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-utils.card>
</x-app-layout>
