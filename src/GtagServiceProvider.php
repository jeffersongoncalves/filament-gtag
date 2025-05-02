<?php

namespace JeffersonGoncalves\Filament\Gtag;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GtagServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-gtag');
    }

    public function packageRegistered(): void
    {
        FilamentView::registerRenderHook(PanelsRenderHook::HEAD_START, fn (): View => view('gtag::script'));
    }
}
