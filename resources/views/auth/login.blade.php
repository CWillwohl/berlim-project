<x-guest-layout title="Login">
    <x-auth.card :action="route('login-user')">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Entre na sua conta!</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Insira seu e-mail:</label>
            <input
                type="email"
                name="email"
                id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="name@company.com"
                value="{{ old('email') }}"
                required
            >
            @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Insira sua senha:</label>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
            >
        </div>

        <div class="flex items-start">
            <label for="remember" class="mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lembrar de mim</label>
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
            </div>
        </div>

        <button
        type="submit"
        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Entrar na sua conta
        </button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Não possuí cadastro? <a href="{{ route('register-form') }}" class="text-blue-700 hover:underline dark:text-blue-500">Realize o seu cadastro!</a>
        </div>
    </x-auth.card>
</x-guest-layout>
