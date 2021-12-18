<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample\DesignManager;
use Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample\DevelopmentManager;

class FactoryMethodInterviewerTest extends TestCase
{
    public function test_hiring_developers()
    {
        $devManager = new DevelopmentManager();
        $this->assertEquals($devManager->takeInterview(), 'Asking about design patterns!');

        $designManager = new DesignManager();
        $this->assertEquals($designManager->takeInterview(), 'Asking about UI/UX!');
    }
}
