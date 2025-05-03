<?php

namespace App\Services\Admin;

use App\Models\Admin;

class AdminService extends MainService
{
    protected $model = Admin::class;

    public function getUserByEmail(string $email, string $current_user_email = null)
    {
        if (is_null($current_user_email)) {
            return $this->model::where('email', $email)->first();
        } else {
            return $this->model::where('email', $email)
                ->where('email', '!=', $current_user_email)
                ->first();
        }
    }
}
