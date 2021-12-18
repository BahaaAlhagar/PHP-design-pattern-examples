<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class LowerCase implements WritingStateInterface
{
    public function write(string $words)
    {
        return strtolower($words);
    }
}
