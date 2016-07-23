<?php

namespace HansOtt\Holiday;

use HansOtt\Holiday\Calendar\Year;

interface Calendar
{
    /**
     * Get the holidays.
     *
     * @param Year $year
     *
     * @return Holiday[]
     */
    public function getHolidays(Year $year);
}
