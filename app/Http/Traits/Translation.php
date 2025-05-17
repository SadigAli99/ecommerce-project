<?php

namespace App\Http\Traits;

use App\Services\Admin\LanguageService;

trait Translation
{

    protected $languageService;
    public function __construct()
    {
        $this->languageService = new LanguageService();
    }

    public function __get($name)
    {
        if (property_exists($this, 'translatedAttribute') && in_array($name, $this->translatedAttribute)) {
            return $this->getTranslatedAttribute($name);
        }

        return parent::__get($name);
    }

    public function getTranslatedAttribute($attribute)
    {
        $language_id = $this->languageService->getByShortName(app()->getLocale());
        $model = $this->translations()->where('language_id', $language_id)->first();
        return $model->getAttribute($attribute);
    }

    public function translate($lang)
    {
        $language_id = $this->languageService->getByShortName($lang);
        return $this->translations()->where('language_id', $language_id)->first();
    }

    public function addTranslation(array $data)
    {
        $languages = $this->languageService->getAll();
        $translatedAttributes = $this->translatedAttribute;
        foreach ($languages as $language) {
            $translatedData = ['language_id' => $language->id];
            foreach ($translatedAttributes as $translatedAttribute) {
                $translatedData[$translatedAttribute] = isset($data[$translatedAttribute . '_' . $language->short_name]) ? $data[$translatedAttribute . '_' . $language->short_name] : '';
            }
            $this->translations()->create($translatedData);
        }
    }

    public function updateTranslation(array $data)
    {
        $languages = $this->languageService->getAll();
        $translatedAttributes = $this->translatedAttribute;
        foreach ($languages as $language) {
            $translatedData = ['language_id' => $language->id];
            foreach ($translatedAttributes as $translatedAttribute) {
                $translatedData[$translatedAttribute] = isset($data[$translatedAttribute . '_' . $language->short_name]) ? $data[$translatedAttribute . '_' . $language->short_name] : '';
            }
            $translated_data = $this->translations()->where('language_id', $language->id)->first();
            if (is_null($translated_data)) {
                $translated_data = $this->translations()->create($translatedData);
            } else {
                $translated_data->update($translatedData);
            }
        }
    }
}
