---
name: filament-gtag-development
description: Build and work with Filament Gtag plugin features, including Google Analytics settings page, automatic script injection, IP anonymization, and custom gtag configuration.
---

# Filament Gtag Development

## When to use this skill

Use this skill when:
- Adding or modifying Google Analytics (Gtag) integration in a Filament panel
- Customizing the Gtag settings page fields or behavior
- Debugging gtag script injection issues
- Working with the `GtagPlugin`, `ManageGtagSettings`, or `GtagServiceProvider` classes
- Configuring advanced gtag options like IP anonymization or additional config parameters

## Package Overview

- **Package**: `jeffersongoncalves/filament-gtag` (branch `3.x` for Filament 5)
- **Namespace**: `JeffersonGoncalves\Filament\Gtag`
- **Dependencies**: `filament/filament:^5.0`, `filament/spatie-laravel-settings-plugin:^5.0`, `jeffersongoncalves/laravel-gtag:^2.0`
- **Service Provider**: `JeffersonGoncalves\Filament\Gtag\GtagServiceProvider`

## Version Compatibility

| Branch | Filament | PHP | Laravel |
|--------|----------|-----|---------|
| 1.x | 3.x | ^8.2 | ^11.0 \| ^12.0 |
| 2.x | 4.x | ^8.2 | ^11.0 \| ^12.0 |
| 3.x | 5.x | ^8.2 | ^11.0 \| ^12.0 |

## Configuration

### Basic Setup

Register the plugin in your `PanelProvider`:

```php
use JeffersonGoncalves\Filament\Gtag\GtagPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GtagPlugin::make(),
        ]);
}
```

### Disable Settings Page

If you only want automatic script injection without the admin settings page:

```php
GtagPlugin::make()->settingsPage(false)
```

### Migrations

Publish and run both Spatie and Gtag settings migrations:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=gtag-settings-migrations
php artisan migrate
```

## Architecture

### Plugin Class (`GtagPlugin`)

```php
namespace JeffersonGoncalves\Filament\Gtag;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\Filament\Gtag\Pages\ManageGtagSettings;

class GtagPlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        $plugin = filament(app(static::class)->getId());
        return $plugin;
    }

    public function getId(): string
    {
        return 'filament-gtag';
    }

    public function register(Panel $panel): void
    {
        if ($this->hasSettingsPage) {
            $panel->pages([
                ManageGtagSettings::class,
            ]);
        }
    }

    public function boot(Panel $panel): void {}

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;
        return $this;
    }
}
```

### Service Provider (`GtagServiceProvider`)

The service provider registers the gtag tracking script via render hooks:

```php
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
        $package->name('filament-gtag')
            ->hasTranslations();
    }

    public function packageRegistered(): void
    {
        FilamentView::registerRenderHook(PanelsRenderHook::HEAD_START, fn (): View => view('gtag::script'));
    }
}
```

### Settings Page (`ManageGtagSettings`)

The settings page has two sections -- General and Advanced:

```php
namespace JeffersonGoncalves\Filament\Gtag\Pages;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Gtag\Settings\GtagSettings;

class ManageGtagSettings extends SettingsPage
{
    protected static string $settings = GtagSettings::class;
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-gtag::pages.sections.general.heading'))
                    ->description(__('filament-gtag::pages.sections.general.description'))
                    ->schema([
                        TextInput::make('gtag_id')
                            ->label(__('filament-gtag::pages.fields.gtag_id.label'))
                            ->helperText(__('filament-gtag::pages.fields.gtag_id.helper'))
                            ->placeholder('G-XXXXXXXXXX')
                            ->nullable(),
                        Toggle::make('enabled')
                            ->label(__('filament-gtag::pages.fields.enabled.label'))
                            ->helperText(__('filament-gtag::pages.fields.enabled.helper')),
                        Toggle::make('anonymize_ip')
                            ->label(__('filament-gtag::pages.fields.anonymize_ip.label'))
                            ->helperText(__('filament-gtag::pages.fields.anonymize_ip.helper')),
                    ])->columns(2),

                Section::make(__('filament-gtag::pages.sections.advanced.heading'))
                    ->description(__('filament-gtag::pages.sections.advanced.description'))
                    ->collapsed()
                    ->schema([
                        KeyValue::make('additional_config')
                            ->label(__('filament-gtag::pages.fields.additional_config.label'))
                            ->helperText(__('filament-gtag::pages.fields.additional_config.helper'))
                            ->keyLabel(__('filament-gtag::pages.fields.additional_config.key_label'))
                            ->valueLabel(__('filament-gtag::pages.fields.additional_config.value_label')),
                    ]),
            ]);
    }
}
```

## Settings Fields

### General Section

| Field | Type | Description |
|-------|------|-------------|
| `gtag_id` | TextInput | Google Analytics Measurement ID (e.g., `G-XXXXXXXXXX`) |
| `enabled` | Toggle | Enable or disable tracking |
| `anonymize_ip` | Toggle | Anonymize visitor IP addresses (GDPR compliance) |

### Advanced Section (collapsed by default)

| Field | Type | Description |
|-------|------|-------------|
| `additional_config` | KeyValue | Custom key-value pairs for additional gtag configuration |

## Translations

Translations are loaded from `filament-gtag::pages.*` namespace. Key translation keys:
- `filament-gtag::pages.navigation_label`
- `filament-gtag::pages.navigation_group`
- `filament-gtag::pages.title`
- `filament-gtag::pages.sections.general.heading`
- `filament-gtag::pages.sections.general.description`
- `filament-gtag::pages.sections.advanced.heading`
- `filament-gtag::pages.sections.advanced.description`
- `filament-gtag::pages.fields.gtag_id.label`
- `filament-gtag::pages.fields.enabled.label`
- `filament-gtag::pages.fields.anonymize_ip.label`
- `filament-gtag::pages.fields.additional_config.label`

## Troubleshooting

### Gtag script not injecting
**Cause**: The `gtag::script` view is not found, or the `laravel-gtag` base package is not installed.
**Solution**: Ensure `jeffersongoncalves/laravel-gtag:^2.0` is installed and service providers are discovered.

### Settings page not appearing
**Cause**: Migrations not published or run.
**Solution**: Run both `vendor:publish` commands for Spatie settings and Gtag settings migrations, then `php artisan migrate`.

### Settings not persisting
**Cause**: The `spatie/laravel-settings` migrations were not published.
**Solution**: Publish the Spatie migrations first: `php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"` then run `php artisan migrate`.

### Additional config not saving correctly
**Cause**: The `additional_config` field expects a key-value array format.
**Solution**: Ensure the `GtagSettings` class has the `additional_config` property defined as an `array` type with the appropriate cast.
