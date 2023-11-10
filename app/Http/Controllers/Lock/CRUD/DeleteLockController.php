<?php

namespace App\Http\Controllers\Lock\CRUD;

use App\Models\Lock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class DeleteLockController extends Controller
{
    public function __invoke(Lock $lock): RedirectResponse
    {
        $lock->delete();

        return redirect()->route('locks.index');
    }
}
