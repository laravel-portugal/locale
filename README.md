# Lang em Português

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-portugal/locale.svg?style=flat-square)](https://packagist.org/packages/laravel-portugal/locale)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/laravel-portugal/locale/Tests/main)](https://github.com/laravel-portugal/locale/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-portugal/locale.svg?style=flat-square)](https://packagist.org/packages/laravel-portugal/locale)

In this repository, you can find the Portuguese lang files for your Laravel project.

## Installation

You can install the package via composer:

```bash
composer require laravel-portugal/locale --dev
```

If you want to keep your lang files up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan laravel-portugal:locale-publish --force"
    ]
}
```

## Usage

You can publish the lang files using this command:

```bash
php artisan laravel-portugal:locale-publish
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Caneco](https://github.com/caneco)
- [Francisco Madeira](https://github.com/xiCO2k)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
