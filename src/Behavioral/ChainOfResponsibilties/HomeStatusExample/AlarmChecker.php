<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample;

use Exception;

class AlarmChecker extends HomeChecker
{
    protected $succesor;

    public function __construct(HomeChecker $succesor = null)
    {
        $this->succesor = $succesor;
    }

    public function check(HomeStatus $status)
    {
        if (! $status->alarmOn) {
            throw new Exception("Alarm is off, Abort!");
        }

        return $this->next($status);
    }
}
