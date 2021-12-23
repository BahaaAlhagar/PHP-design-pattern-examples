<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

class DeveloperInterviewer implements InterviewerInterface
{
    public function askQuestions()
    {
        return 'Asking about design patterns!';
    }
}
