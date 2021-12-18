<?php

namespace Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
