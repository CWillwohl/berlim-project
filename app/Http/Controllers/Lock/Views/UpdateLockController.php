<?php

namespace App\Http\Controllers\Lock\Views;

use App\Models\Lock;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class UpdateLockController extends Controller
{
    public function __invoke(Lock $lock): View
    {
        $locations = collect([1, 2, 3]);

        return view('lock.edit', compact('lock'));
    }
}
