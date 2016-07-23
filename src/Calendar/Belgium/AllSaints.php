<?php

namespace HansOtt\Holiday\Calendar\Belgium;

use DateTimeImmutable;
use HansOtt\Holiday\Calendar\Year;
use HansOtt\Holiday\HolidayAbstract;

final class AllSaints extends HolidayAbstract
{
    public function __construct(Year $year)
    {
        $time = sprintf('%s-11-01', $year);
        $startsAt = new DateTimeImmutable($time);

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

