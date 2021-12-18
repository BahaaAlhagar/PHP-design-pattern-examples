<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class DefaultText implements WritingStateInterface
{
    public function write(string $words)
    {
        return $words;
    }
}
