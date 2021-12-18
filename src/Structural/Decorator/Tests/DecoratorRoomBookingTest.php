<?php

namespace Balhagar\PhpDesignPatterns\Structural\Decorator\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample\WiFi;
use Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample\ExtraBed;
use Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample\DoubleRoomBooking;

class DecoratorRoomBookingTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertEquals(40, $booking->calculatePrice());
        $this->assertEquals('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertEquals(42, $booking->calculatePrice());
        $this->assertEquals('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertEquals(72, $booking->calculatePrice());
        $this->assertEquals('double room with wifi with extra bed', $booking->getDescription());
    }
}
