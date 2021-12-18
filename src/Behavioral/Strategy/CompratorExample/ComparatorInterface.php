<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\Strategy\CompratorExample;

interface ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int;
}
