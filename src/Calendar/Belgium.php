<?php

namespace HansOtt\Holiday\Calendar;

use HansOtt\Holiday\Calendar;

final class Belgium implements Calendar
{
    public function getHolidays(Year $year)
    {
        return [
            new Belgium\NewYearsDay($year),
            new Belgium\EasterMonday($year),
            new Belgium\LabourDay($year),
            new Belgium\AscensionDay($year),
            new Belgium\WhitMonday($year),
            new Belgium\IndependenceDay($year),
            new Belgium\AssumptionOfMary($year),
            new Belgium\AllSaints($year),
            new Belgium\ArmisticeDay($year),
            new Belgium\ChristmasDay($year),
        ];
    }
}
