<?php

namespace App\Http\Controllers\Location\Views;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CreateLocationController extends Controller
{
    public function __invoke(): View
    {
        return view('location.create');
    }
}
