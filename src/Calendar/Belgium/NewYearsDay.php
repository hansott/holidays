<?php

namespace HansOtt\Holiday\Calendar\Belgium;

use HansOtt\Holiday\Calendar\Year;
use HansOtt\Holiday\HolidayAbstract;

final class NewYearsDay extends HolidayAbstract
{
    public function __construct(Year $year)
    {
        $startsAt = \HansOtt\Holiday\getNewYearsEve($year);

        parent::__construct(
            $startsAt,
            \HansOtt\Holiday\getEndOfDay($startsAt)
        );
    }

    public function isOfficial()
    {
        return true;
    }
}
