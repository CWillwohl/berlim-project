<?php

namespace App\Http\Controllers\Lock\CRUD;

use App\Models\Lock;
use App\Traits\AlertMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UpdateLockController extends Controller
{

    use AlertMessage;

    public function __invoke(Lock $lock, Request $request): RedirectResponse
    {
        $data = $request->validate([
            'hash' => ['required', 'string'],
            'location_id' => ['required', 'integer'],
        ]);

        $lock->update($data);

        $this->successMessage('Fechadura atualizada com sucesso!');

        return redirect()->route('locks.edit', $lock);
    }
}
