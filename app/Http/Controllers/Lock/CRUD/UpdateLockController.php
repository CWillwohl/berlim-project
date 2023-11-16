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
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'hash' => ['required', 'string'],
            'location_id' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $lock->update($request->validated());

        $this->successMessage('Fechadura atualizada com sucesso!');

        return redirect()->route('locks.edit', $lock);
    }
}
