## Filament Gtag

Filament plugin for managing Google Analytics (Gtag) settings with a Settings Page powered by spatie/laravel-settings. Automatically injects the gtag tracking script into Filament panels. Built on top of the `jeffersongoncalves/laravel-gtag` package.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-gtag
</code-snippet>
@endverbatim

Publish and run the settings migrations:

@verbatim
<code-snippet name="Publish and run migrations" lang="bash">
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=gtag-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Gtag\GtagPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GtagPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page" lang="php">
GtagPlugin::make()->settingsPage(false)
</code-snippet>
@endverbatim

### Features
- Settings page to configure Google Analytics tracking (Gtag ID, Enabled toggle, Anonymize IP, Additional Config)
- Automatic injection of the gtag tracking script into `<head>` via `PanelsRenderHook::HEAD_START`
- Advanced section with key-value pairs for additional gtag configuration
- Uses `spatie/laravel-settings` for persistent settings storage
- Uses `jeffersongoncalves/laravel-gtag` as the core Google Analytics package
- Supports translations via language files (`filament-gtag::pages.*`)

### Architecture
- `GtagPlugin` implements `Filament\Contracts\Plugin` and registers `ManageGtagSettings`
- `GtagServiceProvider` extends `PackageServiceProvider` and registers the render hook for script injection
- `ManageGtagSettings` extends `Filament\Pages\SettingsPage` with fields: `gtag_id`, `enabled`, `anonymize_ip`, `additional_config`
- Settings are stored via `JeffersonGoncalves\Gtag\Settings\GtagSettings` class

### Best Practices
- Always publish both Spatie and Gtag settings migrations before running `php artisan migrate`
- Use `settingsPage(false)` when you want automatic script injection without the admin UI
- Use the `additional_config` key-value field for custom gtag configuration parameters
- Enable `anonymize_ip` for GDPR compliance
