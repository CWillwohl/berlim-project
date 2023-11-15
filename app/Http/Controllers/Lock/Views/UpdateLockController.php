<?php

namespace App\Http\Controllers\Lock\Views;

use App\Models\Lock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class UpdateLockController extends Controller
{
    public function __invoke(Lock $lock): View
    {
        $locations = collect([1, 2, 3]);

        $users = User::doesntHave('locks')->get();

        return view('lock.edit', compact('lock', 'locations', 'users'));
    }
}
