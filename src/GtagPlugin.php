<?php

namespace JeffersonGoncalves\Filament\Gtag;

use JeffersonGoncalves\Filament\Gtag\Pages\ManageGtagSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class GtagPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-gtag';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageGtagSettings::class;
    }
}
