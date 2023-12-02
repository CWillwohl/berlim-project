<?php

namespace App\Http\Controllers\Location\CRUD;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Location\StoreLocationRequest;
use App\Traits\AlertMessage;

class CreateLocationController extends Controller
{
    public function __construct(
        protected Location $location
    ) {}

    use AlertMessage;

    public function __invoke(StoreLocationRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->location->create($data);

        $this->successMessage('Localidade criada com sucesso!');

        return redirect()->route('locations.index');
    }
}
