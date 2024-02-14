<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepositoryContract;

class UserController extends Controller
{
    /**
     * @var UserRepositoryContract
     */
    private $userRepository;

    /**
     * Create a new controller instance.
     *
     * @param UserRepositoryContract $userRepository
     */
    public function __construct(UserRepositoryContract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Update an existing user record.
     *
     * @param UserUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(UserUpdateRequest $request)
    {
        $data = $request->validated();
        $response = UserService::update(auth()->user->id, $data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your car has been updated');

        return back();
    }
}
