# REMIND - Businesscard library

This library provides an object oriented aproach for generating vCard files.

[travis-img]: https://img.shields.io/travis/remindgmbh/businesscard.svg?style=flat-square
[codecov-img]: https://img.shields.io/codecov/c/github/remindgmbh/businesscard.svg?style=flat-square
[php-v-img]: https://img.shields.io/packagist/php-v/remind/businesscard?style=flat-square
[github-issues-img]: https://img.shields.io/github/issues/remindgmbh/businesscard.svg?style=flat-square
[contrib-welcome-img]: https://img.shields.io/badge/contributions-welcome-blue.svg?style=flat-square
[license-img]: https://img.shields.io/github/license/remindgmbh/businesscard.svg?style=flat-square
[styleci-img]: https://styleci.io/repos/306764901/shield

[![travis-img]](https://travis-ci.com/github/remindgmbh/businesscard)
[![codecov-img]](https://codecov.io/gh/remindgmbh/businesscard)
[![styleci-img]](https://github.styleci.io/repos/306764901)
[![php-v-img]](https://packagist.org/packages/remind/businesscard)
[![github-issues-img]](https://github.com/remindgmbh/businesscard/issues)
[![contrib-welcome-img]](https://github.com/remindgmbh/businesscard/blob/master/CONTRIBUTING.md)
[![license-img]](https://github.com/remindgmbh/businesscard/blob/master/LICENSE)

--------------------------------------------------------------------------------

## DESCRIPTION

Because of the new reserved keyword ```fn``` in PHP 7.4 this library currently
does not offer support for this PHP version.

### vCard
This implementation is incomplete at the moment as not all fields and parameters
of the vCard rfc6350 are fully implemented.

Supports v2.1, 3.0 and 4.0 for all elements.

### xCard
Implementation pending.

### jCard
Implementation pending.

### hCard
Implementation pending.

--------------------------------------------------------------------------------

## HOW TO USE

```php
<?php

use \Remind\BusinessCard\VCard;
use \Remind\BusinessCard\Property\Version;

$version = new Version();
$version->setVersion(Version::VERSION_4_0);

$vCard = new VCard($version);

$n = new N();
$n->setGivenName('John');
$n->setFamilyName('Doe');

$fn = new Fn('John Doe');

$vCard->addProperty($n);
$vCard->addProperty($fn);

echo $vCard;
```
