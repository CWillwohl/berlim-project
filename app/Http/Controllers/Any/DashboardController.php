<?php

namespace App\Http\Controllers\Any;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $locks = auth()->user()->locks;

        return view('dashboard', compact(
            'locks'
        ));
    }
}
