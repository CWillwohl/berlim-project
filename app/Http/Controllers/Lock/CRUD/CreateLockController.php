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
        $data = $request->validate([
            'hash' => ['required', 'string'],
            'location_id' => ['required', 'integer'],
        ]);

        $lock = Lock::create([
            'hash' => $data['hash'],
            'location_id' => $data['location_id'],
            'status' => false,
            'user_id' => null
        ]);

        return redirect()->route('locks.edit', $lock)->with('success', 'Fechadura cadastrada com sucesso!');
    }
}
