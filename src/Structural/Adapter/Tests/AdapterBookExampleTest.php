<?php

namespace Balhagar\PhpDesignPatterns\Structural\Adapter\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Structural\Adapter\BookExample\Book;
use Balhagar\PhpDesignPatterns\Structural\Adapter\BookExample\Kindle;
use Balhagar\PhpDesignPatterns\Structural\Adapter\BookExample\EBookAdapter;


class AdapterBookExampleTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}
