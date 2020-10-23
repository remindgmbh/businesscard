<?php

namespace Remind\BusinessCard\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Remind\BusinessCard\VCard;
use Remind\BusinessCard\VCard\Property\Version;

/**
 * Description of VCardTest
 */
class VCardTest extends TestCase
{
    public function testCreateVcardVersion21AndCastToString(): void
    {
        $version = new Version();
        $version->setVersion(Version::VERSION_2_1);
        $vCard = new VCard($version);

        $expected = 'BEGIN:VCARD' . chr(10) . 'VERSION:2.1' . chr(10) . 'END:VCARD';

        $this->assertEquals($expected, (string) $vCard);
    }

    public function testCreateVcardVersion3AndCastToString(): void
    {
        $version = new Version();
        $version->setVersion(Version::VERSION_3_0);
        $vCard = new VCard($version);

        $expected = 'BEGIN:VCARD' . chr(10) . 'VERSION:3.0' . chr(10) . 'END:VCARD';

        $this->assertEquals($expected, (string) $vCard);
    }

    public function testCreateVcardVersion4AndCastToString(): void
    {
        $version = new Version();
        $version->setVersion(Version::VERSION_4_0);
        $vCard = new VCard($version);

        $expected = 'BEGIN:VCARD' . chr(10) . 'VERSION:4.0' . chr(10) . 'END:VCARD';

        $this->assertEquals($expected, (string) $vCard);
    }
}
