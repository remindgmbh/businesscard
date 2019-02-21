# REMIND - Businesscard library

![remind-badge](https://img.shields.io/badge/author-REMIND-black.svg?style=flat-square)
![library-badge](https://img.shields.io/badge/library-green.svg?style=flat-square)
![typo38-badge](https://img.shields.io/badge/TYPO3-8.7-yellow.svg?style=flat-square)
![php71-badge](https://img.shields.io/badge/PHP-7.1-yellow.svg?style=flat-square)
![license-badge](https://img.shields.io/badge/license-GPL--3.0-blue.svg?style=flat-square)
[![build-status](https://jenkins.remind.de/buildStatus/icon?job=rmnd_businesscard)](https://jenkins.remind.de/job/rmnd_businesscard/)
![version-badge](https://img.shields.io/badge/version-1.1.0-lightgrey.svg?style=flat-square)

DESCRIPTION
--------------------------------------------------------------------------------
This library provides a PHP library for generating business cards based on
the vCard format in various formats.

=== vCard ===
This implementation is incomplete at the moment as not all fields and parameters
of the vCard rfc6350 are fully implemented.

Supports v2.1, 3.0 and 4.0 for all elements.

=== xCard ===
Implementation pending.

=== jCard ===
Implementation pending.

=== hCard ===
Implementation pending.

HOW TO USE
--------------------------------------------------------------------------------

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
