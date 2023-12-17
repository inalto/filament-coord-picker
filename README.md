# Form coord picker field for filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/moonwalkerz/filament-coord-picker.svg?style=flat-square)](https://packagist.org/packages/moonwalkerz/filament-coord-picker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/moonwalkerz/filament-coord-picker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/moonwalkerz/filament-coord-picker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/moonwalkerz/filament-coord-picker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/moonwalkerz/filament-coord-picker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/moonwalkerz/filament-coord-picker.svg?style=flat-square)](https://packagist.org/packages/moonwalkerz/filament-coord-picker)

The Coordinate Picker Field is an interactive and user-friendly component for FilamentPHP forms, allowing users to precisely select geographical coordinates. This field integrates a dynamic map interface, where users can pinpoint a location by either entering an address or manually navigating and clicking on the map. Upon selection, the field automatically captures and fills in the latitude and longitude coordinates.

## Support us


## Installation

You can install the package via composer:

```bash
composer require moonwalkerz/filament-coord-picker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-coord-picker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-coord-picker-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-coord-picker-views"
```

## Usage

```php
$filamentCoordPicker = new moonwalkerz\FilamentCoordPicker();
echo $filamentCoordPicker->echoPhrase('Hello, moonwalkerz!');
```

## Testing

```bash
composer test
```

## 🙏 Big Thanks to 🙏
- Leaflet | http://leafletjs.com

## 🤑 Support Us 🤑

These codes make your life easier and you avoid wasting time?\
Give us some RedBull!

USDT(BEP20)\
0x367B9207ACBC30022F9A7262320E36661D7Ffeb5

## ✉️ Contact Us ✉️ 

Do you have any suggestions?\
Do you need to customise this plugin?

Mail: webmaster@moonwalkerz.dev\
Telegram: @MoonWalkerzDev

## Credits

- [Alain Martini](https://github.com/moonwalkerz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
