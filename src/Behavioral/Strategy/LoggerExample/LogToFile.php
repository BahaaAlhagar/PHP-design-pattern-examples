<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample;

class LogToFile implements LoggerInterface
{
    public function log($data)
    {
        return $data . ' logged to a File';
    }
}
