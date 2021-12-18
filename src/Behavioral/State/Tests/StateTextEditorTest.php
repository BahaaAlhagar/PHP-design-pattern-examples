<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\State\Tests;

use PHPUnit\Framework\TestCase;
use Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample\LowerCase;
use Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample\UpperCase;
use Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample\TextEditor;
use Balhagar\PhpDesignPatterns\Behavioral\State\WritingExample\DefaultText;

class StateTextEditorTest extends TestCase
{
    public function test_text_writing()
    {
        $editor = new TextEditor(new DefaultText());

        $editor->type('First line');

        $this->assertEquals($editor->type('First line'), 'First line');

        $editor->setState(new UpperCase());

        $this->assertEquals($editor->type('Second line'), 'SECOND LINE');
        $this->assertEquals($editor->type('Third line'), 'THIRD LINE');

        $editor->setState(new LowerCase());

        $this->assertEquals($editor->type('Second line'), 'second line');
        $this->assertEquals($editor->type('Third line'), 'third line');
    }
}
