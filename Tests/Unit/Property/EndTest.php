<?php

namespace Remind\BusinessCard\Tests\Unit\Property;

use PHPUnit\Framework\TestCase;
use Remind\BusinessCard\VCard\Property\End;

/**
 * Description of BeginTest.
 */
class EndTest extends TestCase
{
    public function testCreateAndCastToString(): void
    {
        $subject = new End();

        $this->assertEquals('END:VCARD', (string) $subject);
    }

    public function testGetName(): void
    {
        $subject = new End();

        $this->assertEquals('END', $subject->getName());
    }
}
