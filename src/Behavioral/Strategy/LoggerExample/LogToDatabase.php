<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample;

class LogToDatabase implements LoggerInterface
{
    public function log($data)
    {
        return $data . ' logged to a Database';
    }
}
