<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function __construct(public AdminService $adminService) {}

    public function login(array $data): array
    {
        $admin = $this->adminService->getUserByEmail($data['email']);
        $credentials = ['email' => $data['email'], 'password' => $data['password']];
        $remember_me = isset($data['remember_me']) ? true : false;
        if (is_null($admin)) return ['status' => 'error', 'message' => 'Yanlış giriş məlumatları', 'redirect' => redirect()->back()];
        $authAttempt = Auth::guard('admin')->attempt($credentials, $remember_me);
        if (!$authAttempt) return ['status' => 'error', 'message' => 'Yanlış giriş məlumatları', 'redirect' => redirect()->back()];
        return [
            'status' => 'success',
            'message' => 'Uğurla daxil oldunuz',
            'redirect' => redirect()->route('admin.dashboard'),
        ];
    }

    public function update_profile(array $data): array
    {
        $current_admin = $this->adminService->getById(auth()->guard('admin')->id());
        $admin = $this->adminService->getUserByEmail($data['email'], $current_admin->email);
        if (!is_null($admin)) return ['status' => 'error', 'message' => 'Bu istifadə artıq mövcuddur', 'redirect' => redirect()->back()];
        if (!is_null($data['password'])) $data['password'] = bcrypt($data['password']);
        else $data['password'] = $current_admin->password;
        $this->adminService->update($current_admin, $data);
        return [
            'status' => 'success',
            'message' => 'Profiliniz uğurla yeniləndi',
            'redirect' => redirect()->back(),
        ];
    }

    public function logout(): array
    {
        Auth::guard('admin')->logout();
        return [
            'status' => 'success',
            'message' => 'Uğurla çıxış etdiniz',
            'redirect' => redirect()->route('admin.login'),
        ];
    }
}
