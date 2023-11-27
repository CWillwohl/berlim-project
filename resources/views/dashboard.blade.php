<x-app-layout>
    @if($user->lock)
        <livewire:lock-control />
    @endif
</x-app-layout>
