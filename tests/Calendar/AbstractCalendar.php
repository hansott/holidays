<?php

namespace HansOtt\Holiday\Calendar;

use DateTimeImmutable;
use HansOtt\Holiday\Holiday;
use HansOtt\Holiday\Calendar;
use PHPUnit_Framework_TestCase;

abstract class AbstractCalendar extends PHPUnit_Framework_TestCase
{
    /**
     * @return Calendar
     */
    abstract protected function getCalendar();

    /**
     * @var Calendar
     */
    private $calendar;

    public function setUp()
    {
        $this->calendar = $this->getCalendar();
    }

    public function test_it_returns_a_list_of_holidays()
    {
        $year = Year::current();
        $holidays = $this->calendar->getHolidays($year);
        $this->assertInternalType('array', $holidays);
        foreach ($holidays as $holiday) {
            $this->assertInstanceOf(Holiday::class, $holiday);
            $this->assertInternalType('bool', $holiday->isOfficial());
            $this->assertInstanceOf(DateTimeImmutable::class, $holiday->beginsAt());
            $this->assertInstanceOf(DateTimeImmutable::class, $holiday->endsAt());
        }
    }
}
