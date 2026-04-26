<div class="filament-hidden">

![Filament Gtag](https://raw.githubusercontent.com/jeffersongoncalves/filament-gtag/3.x/art/jeffersongoncalves-filament-gtag.png)

</div>

# Filament Gtag

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-gtag.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gtag)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-gtag/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-gtag/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-gtag.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gtag)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-gtag.svg?style=flat-square)](LICENSE.md)

Filament plugin for managing Google Analytics (Gtag) settings with a Settings Page powered by [spatie/laravel-settings](https://github.com/spatie/laravel-settings). Automatically injects the tracking script into Filament panels.

This plugin is built on top of the [laravel-gtag](https://github.com/jeffersongoncalves/laravel-gtag) package, which provides the core Google Analytics integration for Laravel applications.

## Compatibility

| Branch | Filament | PHP | Laravel |
|--------|----------|-----|---------|
| 1.x | 3.x | ^8.2 | ^11.0 \| ^12.0 |
| 2.x | 4.x | ^8.2 | ^11.0 \| ^12.0 |
| **3.x** | **5.x** | **^8.2** | **^11.0 \| ^12.0** |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-gtag
```

Publish and run the settings migrations:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=gtag-settings-migrations
php artisan migrate
```

## Usage

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

The plugin will:
- Add a **Google Analytics Settings** page to your panel (under "Settings" navigation group)
- Automatically inject the gtag tracking script into the panel's `<head>`

### Disable the Settings Page

If you only want the automatic script injection without the settings page:

```php
GtagPlugin::make()
    ->settingsPage(false),
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Goncalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
