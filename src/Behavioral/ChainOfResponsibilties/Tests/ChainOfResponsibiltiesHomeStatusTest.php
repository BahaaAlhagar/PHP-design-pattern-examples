<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample\HomeStatus;
use Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample\AlarmChecker;
use Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample\LocksChecker;
use Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample\LightsChecker;

class ChainOfResponsibiltiesHomeStatusTest extends TestCase
{
    public function test_throw_exception_if_lights_on()
    {
        try {
            $homeChecker = (new LocksChecker(new LightsChecker(new AlarmChecker)))->check(new HomeStatus(false));
        } catch (Exception $e) {
            $exceptionMessage = $e->getMessage();
        }

        $this->assertEquals($exceptionMessage, 'Lights on, Abort!');
    }

    public function test_throw_exception_if_alarm_off()
    {
        try {
            $homeChecker = (new LightsChecker(new LocksChecker(new AlarmChecker)))->check(new HomeStatus(true, true, false));
        } catch (Exception $e) {
            $exceptionMessage = $e->getMessage();
        }

        $this->assertEquals($exceptionMessage, 'Alarm is off, Abort!');
    }

    public function test_throw_exception_if_doors_not_locked()
    {
        try {
            $homeChecker = (new LightsChecker(new AlarmChecker(new LocksChecker)))->check(new HomeStatus(true, false));
        } catch (Exception $e) {
            $exceptionMessage = $e->getMessage();
        }

        $this->assertEquals($exceptionMessage, 'Doors not locked, Abort!');
    }
}
