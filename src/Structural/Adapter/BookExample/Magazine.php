<?php

namespace Balhagar\PhpDesignPatterns\Structural\Adapter\BookExample;

class Magazine implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        ++$this->page;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
