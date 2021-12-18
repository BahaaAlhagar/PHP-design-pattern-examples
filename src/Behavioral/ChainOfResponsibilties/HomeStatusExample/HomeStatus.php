<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample;

class HomeStatus
{
    public $lightsOff;
    public $doorsLocked;
    public $alarmOn;

    public function __construct($lightsOff = true, $doorsLocked = true, $alarmOn = true)
    {
        $this->lightsOff = $lightsOff;
        $this->doorsLocked = $doorsLocked;
        $this->alarmOn = $alarmOn;
    }
}
