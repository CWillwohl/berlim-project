<x-app-layout>
    <x-utils.card title="Tabela - Fechaduras">
        <div class="relative overflow-x-auto sm:rounded-lg">
            <div class="p-2 flex justify-between items-center">
                <div class="max-w-1/2">
                    <label for="table-search" class="sr-only">Buscar por Fechadura</label>
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>
                <div class="max-w-1/2">
                    <a
                    href="{{ route('locks.create') }}"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                        <i class="fa-solid fa-plus"></i>
                        Nova fechadura
                    </a>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs bg-gradient-to-b from-blue-500/50 to-blue-500/30 text-white uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Fechadura
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Usuário vinculado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Localização
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-xs bg-gradient-to-b from-blue-500/70 to-blue-500/50 text-white uppercase">
                        <th class="px-6 py-4">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="flex px-6 py-4 gap-2">
                            <button type="button" class="text-white focus:ring ring-white focus:outline-none bg-black/30 shadow-lg duration-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>

                            <button type="button" class="text-white focus:ring ring-white focus:outline-none bg-black/30 shadow-lg duration-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-utils.card>
</x-app-layout>
