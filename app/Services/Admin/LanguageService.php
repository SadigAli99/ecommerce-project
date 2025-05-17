<?php

namespace App\Services\Admin;

use App\Models\Language;

class LanguageService extends MainService
{
    protected $model = Language::class;

    public function getLanguages()
    {
        return $this->model::orderBy('sort', 'asc')->pluck('short_name')->toArray();
    }

    public function update($model, array $data)
    {
        $items = $this->getAll();
        if (isset($data['is_default'])) {
            if ($this->get_default_count() > 0) {
                foreach ($items as $item) {
                    $item->update(['is_default' => 0]);
                }
                $model->update($data);
            } else {
                $model->update($data);
                $items->first()->update(['is_default' => 1]);
            }
        } else {
            $model->update($data);
        }
    }

    public function get_default_count(): int
    {
        return $this->model::where('is_default', 1)->count();
    }

    public function getByShortName($short_name): int
    {
        $language = $this->model::where('short_name', $short_name)->first();
        if (!is_null($language))
            return $language->id;
        return $this->model::where('is_default', 1)->first()->id;
    }
}
