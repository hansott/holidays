<?php

namespace HansOtt\Holiday\Translator\Belgium;

use HansOtt\Holiday\Translator;
use HansOtt\Holiday\Calendar\Year;
use HansOtt\Holiday\Calendar\Belgium\NewYearsDay;
use HansOtt\Holiday\Translator\AbstractTranslator;

final class DutchTest extends AbstractTranslator
{
    protected function getTranslator()
    {
        return new Dutch();
    }

    protected function getTranslatableHoliday()
    {
        $year = Year::current();

        return new NewYearsDay($year);
    }
}
