<?php

namespace Balhagar\PhpDesignPatterns\Creational\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Creational\Singleton\Example\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
