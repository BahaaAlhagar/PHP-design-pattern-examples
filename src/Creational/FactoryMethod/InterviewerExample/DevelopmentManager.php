<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): InterviewerInterface
    {
        return new Developer();
    }
}
