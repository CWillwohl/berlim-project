<?php

namespace App\Http\Controllers\Lock\CRUD;

use App\Models\Lock;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class CreateLockController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'hash' => ['required', 'string'],
            'location_id' => ['required', 'integer'],
            'status' => ['required', 'boolean'],
        ]);

        $lock = Lock::create($request->validated());

        return redirect()->route('locks.edit', $lock);
    }
}
