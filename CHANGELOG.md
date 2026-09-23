# Changelog

All notable changes to this project will be documented in this file.

## 2.3.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#32)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/18
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/21
* ci: standardize update-changelog workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/23
* build(deps): update jeffersongoncalves/laravel-gtag requirement from ^2.0 to ^3.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/28
* build(deps): bump the actions-deps group with 2 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-gtag/pull/26
* feat(i18n): add translations (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-gtag/pull/32

**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/2.2.0...2.3.0

## 2.2.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v2.1.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^4.8`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^4.8`

## v2.1.0 - 2026-02-22

### What's New

- Add `GtagPlugin` class for plugin registration in PanelProvider
- Add `ManageGtagSettings` page (Filament v4 Settings Page)
- Add translations (en, pt_BR)
- Integrate with `spatie/laravel-settings` via `filament/spatie-laravel-settings-plugin ^4.0`
- Upgrade `jeffersongoncalves/laravel-gtag` to `^2.0` (database-backed settings)

### Usage

Register the plugin in your PanelProvider:

```php
use JeffersonGoncalves\Filament\Gtag\GtagPlugin;

$panel->plugins([
    GtagPlugin::make(),
]);




```
**Full Changelog**: https://github.com/jeffersongoncalves/filament-gtag/compare/2.0.0...v2.1.0

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
