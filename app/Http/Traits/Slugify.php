<?php

namespace App\Http\Traits;

use App\Services\Admin\LanguageService;

trait Slugify
{

    public function generateSlug(array $data): array
    {
        $languageService = app(LanguageService::class);
        $slugAttribute = $this->slugAttribute ?? '';
        $languages = $languageService->getLanguages();
        foreach ($languages as $language) {
            $data['slug_' . $language] = str()->slug($data[$slugAttribute . '_' . $language]);
        }

        return $data;
    }
}
