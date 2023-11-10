<?php

namespace App\Http\Controllers\Lock\Views;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CreateLockController extends Controller
{
    public function __invoke(): View
    {
        $locations = collect([1, 2, 3]);

        return view('lock.create', compact('locations'));
    }

}
