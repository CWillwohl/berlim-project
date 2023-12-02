<?php

namespace App\Http\Controllers\Location\Views;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Resources\LocationResource;

class IndexLocationController extends Controller
{

    public function __construct(
        protected Location $location
    ) {}

    public function __invoke(): View
    {
        $locations = $this->location->getLocationsWithLocks();

        return view('location.index', compact(
            'locations'
        ));
    }
}
