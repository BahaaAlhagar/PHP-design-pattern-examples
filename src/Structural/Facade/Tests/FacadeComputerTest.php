<?php

namespace Balhagar\PhpDesignPatterns\Structural\Facade\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Structural\Facade\ComputerExample\Computer;
use Balhagar\PhpDesignPatterns\Structural\Facade\ComputerExample\ComputerFacade;

class FacadeComputerTest extends TestCase
{
    public function test_text_writing()
    {
        $computer = new ComputerFacade(new Computer());

        // Ouch! Beep beep! Loading.. Ready to be used!
        $this->assertEquals($computer->turnOn(), 'on');

        // Bup bup buzzz! Haah! Zzzzz
        $this->assertEquals($computer->turnOff(), 'off');
    }
}
