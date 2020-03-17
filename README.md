# REMIND - Businesscard library

This library provides a PHP library for generating business cards based on
the vCard format in various formats.

![remind-badge](https://img.shields.io/badge/author-REMIND-black.svg?style=flat-square)
![library-badge](https://img.shields.io/badge/type-library-green.svg?style=flat-square)
![php72-badge](https://img.shields.io/badge/PHP-7.2-yellow.svg?style=flat-square)
![license-badge](https://img.shields.io/badge/license-GPL--3.0-blue.svg?style=flat-square)
![version-badge](https://img.shields.io/badge/version-1.2.0-lightgrey.svg?style=flat-square)

## Build Status

[![build-master](https://jenkins.remind.de/buildStatus/icon?job=rmnd_businesscard%2Fmaster&subject=master)](https://jenkins.remind.de/job/rmnd_businesscard/)
[![build-develop](https://jenkins.remind.de/buildStatus/icon?job=rmnd_businesscard%2Fdevelop&subject=develop)](https://jenkins.remind.de/job/rmnd_businesscard/)

--------------------------------------------------------------------------------

## DESCRIPTION

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
