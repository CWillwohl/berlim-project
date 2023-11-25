@props([
    'locks' =>  '',
])

@if($locks->first())
<div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full md:w-1/2 flex flex-col">
        <form action="{{ route('locks.update-status', $locks->first()) }}" method="POST">
            @csrf
            @method('PATCH')
            <button>
                <i class="fa-solid fa-lock-open"></i>
                @dump($locks->first()->status)
            </button>
        </form>
    </div>
    <div class="w-full md:w-1/2 flex flex-col">

    </div>
</div>
@endif
