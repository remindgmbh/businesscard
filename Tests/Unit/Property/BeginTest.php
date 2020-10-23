<?php

namespace Remind\BusinessCard\Tests\Unit\Property;

use PHPUnit\Framework\TestCase;
use Remind\BusinessCard\VCard\Property\Begin;

/**
 * Description of BeginTest.
 */
class BeginTest extends TestCase
{
    public function testCreateAndCastToString(): void
    {
        $subject = new Begin();

        $this->assertEquals('BEGIN:VCARD', (string) $subject);
    }

    public function testGetName(): void
    {
        $subject = new Begin();

        $this->assertEquals('BEGIN', $subject->getName());
    }
}
