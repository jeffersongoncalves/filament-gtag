<div class="filament-hidden">

![Filament Gtag](https://raw.githubusercontent.com/jeffersongoncalves/filament-gtag/master/art/jeffersongoncalves-filament-gtag.png)

</div>

# Filament Gtag

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-gtag.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gtag)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-gtag/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-gtag/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-gtag.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-gtag)

The Filament package integrates Google Analytics (Gtag) into your Laravel Blade templates, enabling seamless tracking of website visits and user interactions. It simplifies the process of adding analytics to your application, providing valuable insights into your audience and website performance with minimal setup.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-gtag
```

## Usage

Publish config file.

```bash
php artisan vendor:publish --tag=gtag-config
```

Add head template.

```php
@include('gtag::script')
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

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
