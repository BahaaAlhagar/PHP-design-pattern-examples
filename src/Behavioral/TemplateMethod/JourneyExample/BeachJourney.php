<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\TemplateMethod\JourneyExample;

class BeachJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}
