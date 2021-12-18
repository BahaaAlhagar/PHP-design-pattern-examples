<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class DefaultWriting implements WritingStateInterface
{
    public function write(string $words)
    {
        return $words;
    }
}
