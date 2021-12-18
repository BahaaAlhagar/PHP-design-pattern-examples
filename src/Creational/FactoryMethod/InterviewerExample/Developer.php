<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

class Developer implements InterviewerInterface
{
    public function askQuestions()
    {
        return 'Asking about design patterns!';
    }
}
