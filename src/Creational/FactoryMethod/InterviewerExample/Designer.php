<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

class Designer implements InterviewerInterface
{
    public function askQuestions()
    {
        return 'Asking about UI/UX!';
    }
}
