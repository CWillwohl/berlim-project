<x-app-layout>
    {{-- User data edit --}}
    <div class="w-full items-start justify-center">
        <div class="w-full flex flex-col xl:flex-row gap-4">
            <x-utils.card title="Editar - Usuário" size="w-full">
                <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div class="w-full flex flex-col md:flex-row justify-between gap-4">
                        <div class="w-full md:w-1/2 flex flex-col gap-4">
                            <h1 class="w-full text-lg font-semibold">Dados de Cadastro:</h1>

                            <div class="w-full flex flex-col md:flex-row gap-4">
                                <div class="w-full md:w-1/2 flex-col">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ old('name') ?? $user->name }}"
                                        required
                                    >
                                    @error('name')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2 flex-col">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail:</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ old('email') ?? $user->email }}"
                                        required
                                    >
                                    @error('email')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full">
                                <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nível de Acesso:</label>
                                <select id="role_id" name="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Selecione o Nível de Acesso...</option>
                                    @foreach ($roles as $item)
                                        <option value="{{ $item->id }}" @if ($user->role_id == $item->id) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 flex flex-col gap-4">
                            <h1 class="w-full text-lg font-semibold">Dados de Cadastro:</h1>

                            <div class="w-full">
                                <label for="postal_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CEP:</label>
                                <input
                                    type="text"
                                    name="postal_Code"
                                    id="postal_Code"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ old('postal_code') ?? $user->address->postal_code }}"
                                    required
                                >
                                @error('postal_code')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="w-full flex flex-col md:flex-row gap-4">
                                <div class="w-full md:w-1/2 flex-col">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome:</label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ old('name') ?? $user->name }}"
                                        disabled
                                    >
                                    @error('name')
                                        <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </x-utils.card>
        </div>
    </div>
    {{-- User locks --}}
</x-app-layout>
