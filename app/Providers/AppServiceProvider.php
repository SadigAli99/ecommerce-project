<?php

namespace App\Providers;

use App\Services\Admin\LanguageService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $languageService;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LanguageService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->languageService = $this->app->make(LanguageService::class);

        View::share('langs', $this->languageService->getLanguages());
    }
}
