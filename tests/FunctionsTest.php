<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../functions.php';

class FunctionsTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(5, add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(2, subtract(5, 3));
    }
}
