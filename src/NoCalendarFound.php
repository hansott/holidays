<?php

namespace HansOtt\Holiday;

use Exception;

final class NoCalendarFound extends Exception
{
    public static function forCountry($alpha3)
    {
        return new static(
            sprintf(
                'No calendar found for country "%s"',
                $alpha3
            )
        );
    }
}
