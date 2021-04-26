# Resources lang em Português

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-portugal/locale.svg?style=flat-square)](https://packagist.org/packages/laravel-portugal/locale)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/laravel-portugal/locale/run-tests?label=tests)](https://github.com/laravel-portugal/locale/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/laravel-portugal/locale/Check%20&%20fix%20styling?label=code%20style)](https://github.com/laravel-portugal/locale/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-portugal/locale.svg?style=flat-square)](https://packagist.org/packages/laravel-portugal/locale)

In this repository, you can find the Portuguese lang files for your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require laravel-portugal/locale
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="LaravelPortugal\Locale\LocaleServiceProvider"
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="LaravelPortugal\Locale\LocaleServiceProvider" --tag="locale-config"
```

## Usage

After the language publish you need to change the default language of your application in the `config/app.php` configuration by setting `locale` to `pt`.

Then just use it normally.

```php
trans('passwords.reset'); // A sua senha foi alterada!

__('password.throttled') // Aguarde antes de tentar novamente.
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Caneco](https://github.com/caneco)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
