<?php

namespace HansOtt\Holiday;

use Exception;

final class NoTranslatorFound extends Exception
{
    public static function forCountry($alpha3)
    {
        return new static(
            sprintf(
                'No translator found for country "%s"',
                $alpha3
            )
        );
    }

    public static function forLocale($locale)
    {
        return new static(
            sprintf(
                'No translator found for locale "%s"',
                $locale
            )
        );
    }
}
