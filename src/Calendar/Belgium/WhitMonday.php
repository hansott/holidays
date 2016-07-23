<?php

namespace HansOtt\Holiday\Calendar\Belgium;

use HansOtt\Holiday\Calendar\Year;
use HansOtt\Holiday\HolidayAbstract;

final class WhitMonday extends HolidayAbstract
{
    public function __construct(Year $year)
    {
        $easterMonday = \HansOtt\Holiday\getEasterMonday($year);
        $startsAt = $easterMonday->modify('+51 days');

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
