<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample;

use Exception;

class LightsChecker extends HomeChecker
{
    protected $succesor;

    public function __construct(HomeChecker $succesor = null)
    {
        $this->succesor = $succesor;
    }

    public function check(HomeStatus $status)
    {
        if (! $status->lightsOff) {
            throw new Exception("Lights on, Abort!");
        }

        return $this->next($status);
    }
}
