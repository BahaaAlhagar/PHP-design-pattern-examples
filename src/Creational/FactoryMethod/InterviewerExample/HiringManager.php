<?php

namespace Balhagar\PhpDesignPatterns\Creational\FactoryMethod\InterviewerExample;

abstract class HiringManager
{
    // Factory method
    abstract protected function makeInterviewer(): InterviewerInterface;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();

        return $interviewer->askQuestions();
    }
}
