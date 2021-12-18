<?php

namespace Balhagar\PhpDesignPatterns\Structural\Adapter\BookExample;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}
