<?php

namespace App\Http\Controllers\User\CRUD;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{

    public function __construct(
        protected User $user
    ) {}

    public function __invoke(StoreUserRequest $storeUserRequest): RedirectResponse
    {
        $data = $storeUserRequest->validated();

        $user = $this->user->storeNew($data);

        return redirect()->route('users.edit', $user);
    }
}
