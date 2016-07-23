<?php

namespace HansOtt\Holiday\Translator;

use HansOtt\Holiday\Holiday;
use HansOtt\Holiday\Translator;
use PHPUnit_Framework_TestCase;
use HansOtt\Holiday\NoTranslationFound;

abstract class AbstractTranslator extends PHPUnit_Framework_TestCase
{
    /**
     * @return Translator
     */
    abstract protected function getTranslator();

    /**
     * @return Holiday
     */
    abstract protected function getTranslatableHoliday();

    /**
     * @var Translator
     */
    private $translator;

    public function setUp()
    {
        $this->translator = $this->getTranslator();
    }

    public function test_it_initiates()
    {
        $this->assertInstanceOf(Translator::class, $this->translator);
    }

    public function test_it_returns_a_list_of_holidays()
    {
        $translatableHoliday = $this->getTranslatableHoliday();
        $name = $this->translator->getName($translatableHoliday);
        $this->assertInternalType('string', $name);
    }

    public function test_it_throws_exception_when_no_translation_is_found()
    {
        $holiday = $this->createMock(Holiday::class);
        $this->expectException(NoTranslationFound::class);
        $this->translator->getName($holiday);
    }
}
