<?php

namespace JeffersonGoncalves\Filament\Gtag;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class GtagServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-gtag';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_START => 'gtag::script',
        ];
    }
}
