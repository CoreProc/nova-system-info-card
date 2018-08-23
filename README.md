# Nova System Info Card

[![Latest Version on Packagist](https://img.shields.io/packagist/v/coreproc/nova-system-info-card.svg?style=flat-square)](https://packagist.org/packages/coreproc/nova-system-info-card)
[![Total Downloads](https://img.shields.io/packagist/dt/coreproc/nova-system-info-card.svg?style=flat-square)](https://packagist.org/packages/coreproc/nova-system-info-card)

Get the basic system information of the server running your web application right from your Nova dashboard. 

![system info screenshot](https://cdn.coreproc.com/images/nova-system-info-card.jpg)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require coreproc/nova-system-info-card
```

## Usage

Register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...
public function cards()
{
    return [
        // ...
        new \Coreproc\NovaSystemInfoCard\SystemInfoCard(),
    ];
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email chris.bautista@coreproc.ph instead of using the issue tracker.

## Credits

- [Chris Bautista](https://github.com/chrisbjr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
