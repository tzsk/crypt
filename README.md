# Crypt for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://scrutinizer-ci.com/g/tzsk/crypt/badges/build.png?b=master)](https://scrutinizer-ci.com/g/tzsk/crypt/build-status/master)
[![StyleCI](https://styleci.io/repos/100473294/shield?branch=master)](https://styleci.io/repos/100473294)
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Cross Platform Encryption and Decryption with Laravel. 
Mostly used for API Response Encryption and Decrypt at app Level.

Compatible with Laravel 5.1 or Higher.

## Install

Via Composer

``` bash
$ composer require tzsk/crypt
```

## Configure

` config/app.php `
```php
'providers' => [
    ...
    Tzsk\Crypt\Provider\CryptServiceProvider::class,
    ...
],

'aliases' => [
    ...
    'StrCrypt' => Tzsk\Crypt\Facade\StrCrypt::class,
    ...
],
```

To publish the Configuration file in `config/crypt.php` Run:
```bash
php artisan vendor:publish --tag=config
```


## Usage

First use the namespace at the top: 

```php
use Tzsk\Crypt\Facade\StrCrypt;
```

Then use it as following:

``` php
$text = "Hello World!";

$encrypted = StrCrypt::encrypt($text);

$decrypted = StrCrypt::decrypt($encrypted);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email mailtokmahmed@gmail.com instead of using the issue tracker.

## Credits

- [Kazi Mainuddin Ahmed][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/tzsk/crypt.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/tzsk/crypt/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/tzsk/crypt.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/tzsk/crypt.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/tzsk/crypt.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/tzsk/crypt
[link-travis]: https://travis-ci.org/tzsk/crypt
[link-scrutinizer]: https://scrutinizer-ci.com/g/tzsk/crypt/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/tzsk/crypt
[link-downloads]: https://packagist.org/packages/tzsk/crypt
[link-author]: https://github.com/tzsk
[link-contributors]: ../../contributors
