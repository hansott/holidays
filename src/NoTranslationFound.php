<?php

namespace HansOtt\Holiday;

use Exception;

final class NoTranslationFound extends Exception
{
    public static function forHoliday(Holiday $holiday)
    {
        return new static(
            sprintf(
                'No translation found for "%s"',
                get_class($holiday)
            )
        );
    }
}
