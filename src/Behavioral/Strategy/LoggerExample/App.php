<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample;

class App
{
    public function log($data, LoggerInterface $logger = null)
    {
        $logger = $logger ? $logger : new LogToFile;

        return $logger->log($data);
    }
}
