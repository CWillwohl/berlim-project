<?php

namespace App\Http\Controllers\Lock\CRUD;

use App\Models\Lock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LinkUserInLockController extends Controller
{
    public function __invoke(Request $request, Lock $lock): RedirectResponse
    {
        $data = $request->validate([
            'link_status' => ['nullable', 'in:on'],
            'user_id' => ['integer', 'exists:users,id', 'required_with:link_status'],
        ]);

        if(isset($data['link_status']) && $data['link_status'] === 'on')
        {
            $lock->user_id = $data['user_id'];
            $lock->save();

            $alert = [
                'type' => 'success',
                'message' => 'Usuário vinculado com sucesso!'
            ];

            session()->flash('alert', $alert);

            return redirect()->back();
        }

        $lock->removeUser();

        $alert = [
            'type' => 'success',
            'message' => 'Usuário desvinculado com sucesso!'
        ];

        session()->flash('alert', $alert);

        return redirect()->back();
    }
}
