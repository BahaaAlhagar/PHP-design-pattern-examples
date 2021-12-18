<?php

namespace Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample;

class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}
