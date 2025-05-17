<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\Admin\Auth\ProfileRequest;
use App\Services\Admin\AuthService;

class AdminController extends Controller
{
    public function __construct(public AuthService $authService) {}

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $response = $this->authService->login($data);
        toastr($response['message'], $response['status']);
        return $response['redirect'];
    }

    public function update_profile(ProfileRequest $request)
    {
        $data = $request->validated();
        $response = $this->authService->update_profile($data);
        toastr($response['message'], $response['status']);
        return $response['redirect'];
    }

    public function logout()
    {
        $response = $this->authService->logout();
        toastr($response['message'], $response['status']);
        return $response['redirect'];
    }
}
