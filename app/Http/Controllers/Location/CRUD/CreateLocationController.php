<?php

namespace App\Http\Controllers\Location\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateLocationController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        return redirect()->back();
    }
}
