<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class UpperWriting implements WritingStateInterface
{
    public function write(string $words)
    {
        return strtoupper($words);
    }
}
