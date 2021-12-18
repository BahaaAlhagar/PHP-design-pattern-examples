<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\TemplateMethod\JourneyExample;

class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    protected function buyGift(): string
    {
        return "Buy a gift";
    }
}
