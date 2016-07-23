<?php

namespace HansOtt\Holiday;

use PHPUnit_Framework_TestCase;

final class FactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Factory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = Factory::create();
    }

    public function test_it_instantiates_with_defaults()
    {
        $this->assertInstanceOf(Factory::class, $this->factory);
    }

    public function test_it_returns_a_translator()
    {
        $translator = $this->factory->getTranslator('BEL', 'nl-be');
        $this->assertInstanceOf(Translator::class, $translator);
    }

    public function test_it_throws_exception_for_unknown_country()
    {
        $this->expectException(NoTranslatorFound::class);
        $this->factory->getTranslator('non-existing-country-code', 'nl-be');
    }

    public function test_it_throws_exception_for_unknown_locale()
    {
        $this->expectException(NoTranslatorFound::class);
        $this->factory->getTranslator('BEL', 'unknown-locale');
    }

    public function test_it_returns_a_calendar()
    {
        $calendar = $this->factory->getCalendar('BEL');
        $this->assertInstanceOf(Calendar::class, $calendar);
    }

    public function test_it_throws_exception_for_unknown_country_calendar()
    {
        $this->expectException(NoCalendarFound::class);
        $this->factory->getCalendar('non-existing-country-code');
    }
}
