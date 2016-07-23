<?php

namespace HansOtt\Holiday\Calendar;

use PHPUnit_Framework_TestCase;

final class YearTest extends PHPUnit_Framework_TestCase
{
    public function test_it_returns_the_year_as_int()
    {
        $y = 2016;
        $year = new Year($y);
        $yearAsInt = $year->toInt();
        $this->assertEquals($y, $yearAsInt);
    }

    public function test_it_returns_the_current_year()
    {
        $current = (int) date('Y');
        $year = Year::current();
        $this->assertEquals($current, $year->toInt());
    }
}
