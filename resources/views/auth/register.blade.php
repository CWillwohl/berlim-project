<x-guest-layout title="Registre-se">
    <x-auth.card :action="route('register-user')">

        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Faça seu registro na plataforma!</h5>
        <div>
            <x-utils.input name="name" labelText="Insira seu Nome:" placeholder="Seu Nome" value="{{ old('name') }}" required error />
        </div>
        <div>
            <x-utils.input name="email" type="email" labelText="Insira seu e-mail:" placeholder="email@email.com" value="{{ old('email') }}" required error />
        </div>
        <div>
            <x-utils.input name="password" type="password" labelText="Insira sua senha:" placeholder="••••••••" required error />
        </div>
        <div>
            <x-utils.input name="password_confirmation" type="password" labelText="Confirme sua senha:" placeholder="••••••••" required error />
        </div>
        <button
        type="submit"
        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Finalizar Cadastro
        </button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Já cadastrado? <a href="{{ route('login-form') }}" class="text-blue-700 hover:underline dark:text-blue-500">Faça sua autenticação!</a>
        </div>
    </x-auth.card>
</x-guest-layout>
