<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample;

class LogToWebService implements LoggerInterface
{
    public function log($data)
    {
        return $data . ' logged to a Saas Web Service';
    }
}
