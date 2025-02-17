<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Illuminate\Contracts\View\View;
use App\Models\HeroMaster;
use App\Models\HeroSectionCategory;
use Illuminate\Support\Facades\View as ViewFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            fn (): View => view('filament.login_extra')
        );

        // Share menu data with all views
        ViewFacade::composer('*', function ($view) {
            $masterData = HeroMaster::first();
            $menuCategory = HeroSectionCategory::all();

            $view->with(compact('masterData', 'menuCategory'));
        });
    }
}
