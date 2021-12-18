<?php

namespace Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample;

use DesignPatterns\Decorator\Booking;

abstract class BookingDecorator implements Booking
{
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
