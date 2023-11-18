@props([
    'type' => 'text',
    'labelText' => '',
    'name' => '',
    'value' => '',
    'baseOption' => 'Selecione um elemento...',
    'error' => null,
])

<label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $baseOption }}</label>
<select id="{{ $name }}" name="{{ $name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
<option selected disabled>{{ $baseOption }}</option>
    {{ $slot }}
</select>

@if($error)
    @error($name)
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
@endif
