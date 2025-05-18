<?php

namespace App\Services\Admin;

use App\Models\Setting;

class SettingService extends MainService
{
    protected $model = Setting::class;

    public function getData(): array
    {
        return $this->model::pluck('value_' . app()->getLocale(), 'key')->toArray();
    }
}
