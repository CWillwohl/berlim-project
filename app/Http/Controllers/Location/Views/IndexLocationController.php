<?php

namespace App\Http\Controllers\Location\Views;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class IndexLocationController extends Controller
{
    public function __invoke(): View
    {
        $locations = Location::all();

        return view('location.index', compact(
            'locations'
        ));
    }
}
