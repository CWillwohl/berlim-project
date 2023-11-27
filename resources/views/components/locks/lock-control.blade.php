@props([
    'locks' =>  '',
])

@if($locks->first())
<div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full flex flex-col md:flex-row">
        <label for="lock" class="text-white">Selecione a fechadura:</label>
        <select name="lock" id="lock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected disabled>Selecione a fechadura...</option>
            @foreach($locks as $lock)
                <option value="{{ $lock->id }}">{{ $lock->hash }}</option>
            @endforeach
        </select>
    </div>

    <hr class="border-white/30 my-4">

    <div class="w-full flex flex-col md:flex-row divide-x">
        <div class="w-full md:w-1/2 flex flex-col">
            <form action="{{ route('locks.update-status', $locks->first()) }}" method="POST">
                @csrf
                @method('PATCH')
                <button>
                    <p class="text-white">Altere o status da fechadura: </p>
                    <i class="fa-solid fa-lock text-white bg-black/30 text-2xl p-4 rounded-lg"></i>
                </button>
            </form>
        </div>
        <div class="w-full md:w-1/2 flex flex-col">
            <form action="{{ route('locks.update-status', $locks->first()) }}" method="POST">
                @csrf
                @method('PATCH')
                <button>
                    <p class="text-white">Altere o status da fechadura: </p>
                    <i class="fa-solid fa-lock text-white bg-black/30 text-2xl p-4 rounded-lg"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@endif
