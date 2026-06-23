# Changelog

All notable changes to this project will be documented in this file.

## 3.2.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v3.1.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^5.3`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^5.3`

## 2.0.1 - 2026-02-24

### What's Changed

- Add Laravel 13.x support (orchestra/testbench ^11.0)

## v3.1.0 - 2026-02-22

### What's New

- Add `GtagPlugin` class for plugin registration in PanelProvider
- Add `ManageGtagSettings` page (Filament v5 Settings Page)
- Add translations (en, pt_BR)
- Integrate with `spatie/laravel-settings` via `filament/spatie-laravel-settings-plugin ^5.0`
- Upgrade `jeffersongoncalves/laravel-gtag` to `^2.0` (database-backed settings)

### Usage

Register the plugin in your PanelProvider:

```php
use JeffersonGoncalves\Filament\Gtag\GtagPlugin;

$panel->plugins([
    GtagPlugin::make(),
]);




```
**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/3.0.0...v3.1.0

## 3.0.0 - 2026-02-16

### What's Changed

* Bump aglipanci/laravel-pint-action from 2.5 to 2.6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/7
* Bump actions/checkout from 4 to 5 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/8
* Bump stefanzweifel/git-auto-commit-action from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/9
* Bump actions/checkout from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/10
* Bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/11
* Update Dependabot by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/12

**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/2.0.0...3.0.0

## 2.0.0 - 2025-07-17

### What's Changed

* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/1
* Bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/2
* Configure Renovate by @renovate[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/3
* Delete .github/FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/5
* Delete renovate.json by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/6

### New Contributors

* @dependabot[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-gtag/pull/1
* @renovate[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-gtag/pull/3
* @jeffersongoncalves made their first contribution in https://github.com/jeffersongoncalves/filament-gtag/pull/5

**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/1.0.0...2.0.0

## 1.0.0 - 2025-05-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/commits/1.0.0
