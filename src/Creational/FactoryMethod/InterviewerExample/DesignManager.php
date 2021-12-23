<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

class DesignManager extends HiringManager
{
    protected function makeInterviewer(): InterviewerInterface
    {
        return new DesignInterviewer();
    }
}
