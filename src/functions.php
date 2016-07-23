<?php

namespace HansOtt\Holiday;

use DateInterval;
use DateTimeImmutable;
use HansOtt\Holiday\Calendar\Year;

function getNewYearsEve(Year $year)
{
    $time = sprintf('first day of January %s', $year);

    return new DateTimeImmutable($time);
}

/**
 * Get easter monday.
 *
 * @param Year $year
 *
 * @return DateTimeImmutable
 */
function getEasterMonday(Year $year)
{
    $year = $year->toInt();
    $time = sprintf('%d-03-21', $year);
    $base = new DateTimeImmutable($time);
    $days = easter_days($year, CAL_EASTER_ALWAYS_GREGORIAN);
    $intervalSpec = sprintf('P%dD', $days + 1);
    $daysInterval = new DateInterval($intervalSpec);

    return $base->add($daysInterval);
}

function getEndOfDay(DateTimeImmutable $day)
{
    return $day->setTime(23, 59, 59);
}
