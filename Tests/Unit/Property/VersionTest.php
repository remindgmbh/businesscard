<?php

namespace Remind\BusinessCard\Tests\Unit\Property;

use PHPUnit\Framework\TestCase;
use Remind\BusinessCard\VCard\Property\Version;

/**
 * Description of VersionTest
 */
class VersionTest extends TestCase
{
    public function testCreateAndCastToString(): void
    {
        $subject = new Version();

        $this->assertEquals('VERSION:2.1', (string) $subject);
    }

    public function testGetName(): void
    {
        $subject = new Version();

        $this->assertEquals('VERSION', $subject->getName());
    }
}
