<?php

namespace App\Http\Controllers\Lock\Views;

use App\Models\Lock;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class IndexLockController extends Controller
{
    public function __invoke(): View
    {
        $locks = Lock::all();

        return view('lock.index', compact('locks'));
    }
}
