<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class UpperCase implements WritingStateInterface
{
    public function write(string $words)
    {
        return strtoupper($words);
    }
}
