<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class LowerWriting implements WritingStateInterface
{
    public function write(string $words)
    {
        return strtolower($words);
    }
}
