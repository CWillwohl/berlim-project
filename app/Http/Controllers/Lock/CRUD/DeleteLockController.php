<?php

namespace App\Http\Controllers\Lock\CRUD;

use AlertMessage;
use App\Models\Lock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class DeleteLockController extends Controller
{
    use AlertMessage;

    public function __invoke(Lock $lock): RedirectResponse
    {
        $lock->delete();

        $this->successMessage('Fechadura deletada com sucesso!');

        return redirect()->route('locks.index');
    }
}
