# Changelog

All notable changes to this project will be documented in this file.

## v1.1.0 - 2026-02-22

### What's New

- Add `GtagPlugin` class for plugin registration in PanelProvider
- Add `ManageGtagSettings` page (Filament v3 Settings Page)
- Add translations (en, pt_BR)
- Integrate with `spatie/laravel-settings` via `filament/spatie-laravel-settings-plugin ^3.0`
- Upgrade `jeffersongoncalves/laravel-gtag` to `^2.0` (database-backed settings)

### Usage

Register the plugin in your PanelProvider:

```php
use JeffersonGoncalves\Filament\Gtag\GtagPlugin;

$panel->plugins([
    GtagPlugin::make(),
]);

```
**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/1.0.0...v1.1.0

## 1.0.0 - 2025-05-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/commits/1.0.0
