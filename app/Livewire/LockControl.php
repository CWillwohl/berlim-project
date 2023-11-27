<?php

namespace App\Livewire;

use App\Models\Lock;
use App\Traits\AlertMessage;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LockControl extends Component
{

    use AlertMessage;

    public $lock = null;

    public function mount()
    {
        $this->lock = auth()->user()->lock;
    }

    public function toggleLockStatus(): void
    {
        $this->authorize('changeLockStatus', $this->lock);

        $this->lock->changeStatus();

        $this->successMessage('Status da fechadura foi atualizado!');
    }

    public function render(): View
    {
        return view('livewire.lock-control');
    }
}
