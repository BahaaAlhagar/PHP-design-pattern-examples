<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

class DesignInterviewer implements InterviewerInterface
{
    public function askQuestions()
    {
        return 'Asking about UI/UX!';
    }
}
