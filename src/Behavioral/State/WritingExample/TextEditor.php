<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample;

class TextEditor
{
    protected $state;

    public function __construct(WritingStateInterface $state)
    {
        $this->state = $state;
    }

    public function setState(WritingStateInterface $state)
    {
        $this->state = $state;
    }

    public function type(string $words)
    {
        return $this->state->write($words);
    }
}
