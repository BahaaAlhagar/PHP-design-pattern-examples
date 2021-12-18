<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\TemplateMethod\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Behavioral\TemplateMethod\JourneyExample\CityJourney;
use Balhagar\PhpDesignPatterns\Behavioral\TemplateMethod\JourneyExample\BeachJourney;

class TemplateMethodJourneyTest extends TestCase
{
    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertEquals(
            ['Buy a flight ticket', 'Taking the plane', 'Swimming and sun-bathing', 'Taking the plane'],
            $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnAJourneyToACity()
    {
        $beachJourney = new CityJourney();
        $beachJourney->takeATrip();

        $this->assertEquals(
            [
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane',
            ],
            $beachJourney->getThingsToDo()
        );
    }
}
