# Changelog

All notable changes to this project will be documented in this file.

## 1.3.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#31)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/17
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/20
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/22
* build(deps): update jeffersongoncalves/laravel-gtag requirement from ^2.0 to ^3.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/29
* build(deps): bump the actions-deps group with 4 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/27
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/31

**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/1.2.0...1.3.0

## 1.2.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

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
