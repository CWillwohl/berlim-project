<x-app-layout>
    <x-utils.card title="Cadastrar - Localização" size="w-2/3">
        <form action="{{ route('locations.store') }}" method="post">
            @method('POST')
            @csrf
            <div class="w-full flex flex-col gap-4">
                <h2 class="w-full text-left text-base font-bold text-white">
                    Dados de Endereço:
                </h2>

                <div>
                    <x-utils.input name="postal_code" id="postal_code" labelText="Insira seu CEP:" placeholder="XXXXX-XXX" value="{{ old('postal_code') }}" onblur="searchViaCEP()" x-data x-mask="99999-999" required error />
                </div>

                <div class="w-full flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <x-utils.input name="state" id="state" labelText="Estado:" placeholder="Estado" value="{{ old('state') }}" readonly required error />
                    </div>

                    <div class="w-full">
                        <x-utils.input name="city" id="city" labelText="Cidade:" placeholder="Cidade" value="{{ old('city') }}" readonly required error />
                    </div>
                </div>

                <div class="w-full flex flex-col md:flex-row gap-4">
                    <div class="w-full">
                        <x-utils.input name="neighborhood" id="neighborhood" labelText="Bairro:" placeholder="Bairro" value="{{ old('neighborhood') }}" readonly required error />
                    </div>

                    <div class="w-full">
                        <x-utils.input name="street" id="street" labelText="Rua:" placeholder="Rua" value="{{ old('street') }}" readonly required error />
                    </div>

                    <div class="w-full">
                        <x-utils.input name="number" id="number" labelText="Numero:" placeholder="XXX" value="{{ old('number') }}" error />
                    </div>
                </div>

                <div class="h-full flex items-end justify-end">
                    <button
                    type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Finalizar Cadastro
                    </button>
                </div>
            </div>
        </form>
    </x-utils.card>
</x-app-layout>
