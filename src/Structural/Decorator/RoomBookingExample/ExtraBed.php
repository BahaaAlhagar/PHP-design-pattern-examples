<?php

namespace Balhagar\PhpDesignPatterns\Structural\Decorator\RoomBookingExample;

class ExtraBed implements Booking
{
    protected $booking;
    protected const PRICE = 30;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function calculatePrice(): int
    {
        return self::PRICE + $this->booking->calculatePrice();
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}
