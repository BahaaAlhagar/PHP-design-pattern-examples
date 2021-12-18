<?php

namespace DesignPatterns\Strategy\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample\App;
use Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample\LogToFile;
use Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample\LogToDatabase;
use Balhagar\PhpDesignPatterns\Behavioral\Strategy\LoggerExample\LogToWebService;

class StrategyLoggerExampleTest extends TestCase
{
    public function testAppCanLogDataToAFile()
    {
        $app = new App;

        $result = $app->log('some records', new LogToFile);

        $this->assertEquals('some records logged to a File', $result);
    }

    public function testAppDefaultLogsDataToAFile()
    {
        $app = new App;

        $result = $app->log('some records');

        $this->assertEquals('some records logged to a File', $result);
    }

    public function testAppCanLogDataToADatabase()
    {
        $app = new App;

        $result = $app->log('some records', new LogToDatabase);

        $this->assertEquals('some records logged to a Database', $result);
    }

    public function testAppCanLogDataToAWebService()
    {
        $app = new App;

        $result = $app->log('some records', new LogToWebService);

        $this->assertEquals('some records logged to a Saas Web Service', $result);
    }
}
