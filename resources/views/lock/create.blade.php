<x-app-layout>
    <x-utils.card title="Cadastrar - Fechaduras" size="w-2/3">
        <form action="{{ route('locks.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="w-full flex flex-col md:flex-row gap-2">
            <div class="w-full md:w-1/2">
                <label for="hash" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hash do Disposito:</label>
                <input type="text" id="hash" name="hash" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="49fd21bb-6bb0-4b26-b883-ce5f9a0c4d63" required>
                @error('hash')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2">
                <label for="location_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione a localização do dispotivo:</label>
                <select id="location_id" name="location_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected disabled>Selecione a localização do dispotivo...</option>
                    @foreach ($locations as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
                @error('location_id')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <hr class="border-white/40">

        <div class="w-full flex items-center justify-end">
            <button
            type="submit"
            class="w-1/5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 items-center">
                Cadastrar
            </button>
        </div>

        </div>

        </form>
    </x-utils.card>
</x-app-layout>
