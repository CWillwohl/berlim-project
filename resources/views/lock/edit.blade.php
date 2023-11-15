<x-app-layout>
    <div class="w-full items-start justify-center">
        <div class="w-full h-96 flex flex-col xl:flex-row gap-4">
            <x-utils.card title="Cadastrar - Fechaduras" size="w-2/3 h-full">
                <form action="{{ route('locks.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="w-full">
                        <label for="linked_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Usuário Vinculado:</label>
                        <input type="text" id="linked_user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="49fd21bb-6bb0-4b26-b883-ce5f9a0c4d63"
                        value="{{ $lock->user ? $lock->user->name : 'Não vinculado.' }}"
                        disabled>
                    </div>
                    <div class="w-full flex flex-col md:flex-row gap-2">
                        <div class="w-full md:w-1/2">
                            <label for="hash" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hash do Disposito:</label>
                            <input type="text" id="hash" name="hash" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="49fd21bb-6bb0-4b26-b883-ce5f9a0c4d63"
                            value="{{ old('hash') ?? $lock->hash }}"
                            required>
                            @error('hash')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full md:w-1/2">
                            <label for="location_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione a localização do dispotivo:</label>
                            <select id="location_id" name="location_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Selecione a localização do dispotivo...</option>
                                @foreach ($locations as $item)
                                    <option value="{{ $item }}"
                                    @if ($lock->location_id === $item) selected @endif>{{ $item }}</option>
                                @endforeach
                            </select>
                            @error('location_id')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <hr class="border-white/40">
                    <div class="w-full flex items-end justify-end">
                        <button
                        type="submit"
                        class="w-1/5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                            Atualizar dados
                        </button>
                    </div>
                </form>
            </x-utils.card>
            <x-utils.card title="Vincular Usuário - Fechaduras" size="w-2/3 h-full">
                <form action="{{ route('locks.link', $lock) }}" method="POST" class="space-y-6">
                    @method('PATCH')
                    @csrf
                    <div x-data="{ linked: {{ $lock->user ? 'true' : 'false' }} }">
                        <div class="w-full flex flex-col gap-2 space-y-2">
                            <div class="w-full xl:w-1/2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input x-model="linked" type="checkbox" name="link_status" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-50 rounded-full peer peer-focus:ring-4 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span
                                    class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                                    x-text="linked ? 'Desvincular Usuário' : 'Vincular Usuário'">
                                    </span>
                                </label>
                            </div>
                            <div x-show="linked" class="w-full xl:w-1/2">
                                <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione o Usuário que deseja vincular esse dispositivo:</label>
                                <select id="user_id" name="user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Selecione o Usuário do dispotivo...</option>
                                    @if ($lock->user)
                                        <option value="{{ $lock->user->id }}" selected>{{ $lock->user->name}}</option>
                                    @endif
                                    @foreach ($users as $item)
                                        <option value="{{ $item->id }}" @if ($lock->user_id == $item->id) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <hr class="border-white/40 my-8">

                    <div class="w-full flex items-end justify-end">
                        <button
                            type="submit"
                            id="link-btn"
                            class="w-1/5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                            Atualizar Vinculo
                        </button>
                    </div>
                </form>
            </x-utils.card>
        </div>
    </div>
</x-app-layout>
