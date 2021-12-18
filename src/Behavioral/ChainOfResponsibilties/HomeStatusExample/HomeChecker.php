<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample;

abstract class HomeChecker
{
    protected $succesor;

    public function __construct(HomeChecker $succesor = null)
    {
        $this->succesor = $succesor;
    }

    public function next(HomeStatus $status)
    {
        if ($this->succesor) {
            return $this->succesor->check($status);
        }
    }

    abstract public function check(HomeStatus $status);
}
