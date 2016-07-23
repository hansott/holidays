<?php

namespace HansOtt\Holiday;

use InvalidArgumentException;
use HansOtt\Holiday\Calendar\Belgium;
use HansOtt\Holiday\Translator\Belgium\Dutch;

final class Factory
{
    private $calendars;

    private $translators;

    /**
     * @param Calendar[] $calendars
     * @param array[] $translators
     */
    public function __construct(array $calendars, array $translators)
    {
        $this->guardThatTheseAreCalendars($calendars);
        $this->guardThatTheseAreTranslators($translators);
        $this->calendars = $calendars;
        $this->translators = $translators;
    }

    public static function create()
    {
        $calendars = [
            'BEL' => new Belgium(),
        ];

        $translators = [
            'BEL' => [
                'nl-be' => new Dutch(),
            ]
        ];

        return new static($calendars, $translators);
    }

    /**
     * Get a translator for a country and locale.
     *
     * @param string $alpha3 https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     * @param string $locale https://msdn.microsoft.com/en-us/library/windows/desktop/dd757512(v=vs.85).aspx
     *
     * @throws NoTranslatorFound
     *
     * @return Translator
     */
    public function getTranslator($alpha3, $locale)
    {
        if (isset($this->translators[$alpha3]) === false) {
            throw NoTranslatorFound::forCountry($alpha3);
        }

        if (isset($this->translators[$alpha3][$locale]) === false) {
            throw NoTranslatorFound::forLocale($locale);
        }

        return $this->translators[$alpha3][$locale];
    }

    /**
     * Get a calendar for a country.
     *
     * @param string $alpha3 https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     *
     * @throws NoCalendarFound
     *
     * @return Calendar
     */
    public function getCalendar($alpha3)
    {
        if (isset($this->calendars[$alpha3]) === false) {
            throw NoCalendarFound::forCountry($alpha3);
        }

        return $this->calendars[$alpha3];
    }

    private function guardThatTheseAreCalendars(array $calendars)
    {
        foreach ($calendars as $index => $calendar) {
            if (!$calendar instanceof Calendar) {
                throw new InvalidArgumentException(
                    sprintf(
                        'Expected an array of "%s" but instead got "%s" at "%s"',
                        Calendar::class,
                        is_object($calendar) ? get_class($calendar) : gettype($calendar),
                        $index
                    )
                );
            }
        }
    }

    private function guardThatTheseAreTranslators(array $translators)
    {
        foreach ($translators as $alpha3 => $locales) {
            if (is_array($locales) === false) {
                throw new InvalidArgumentException(
                    'Expected an array of locale => "%s", but instead got "%s" at "%s"',
                    Translator::class,
                    is_object($locales) ? get_class($locales) : gettype($locales),
                    $alpha3
                );
            }

            foreach ($locales as $locale => $translator) {
                if (!$translator instanceof Translator) {
                    throw new InvalidArgumentException(
                        sprintf(
                            'Expected an array of "%s" but instead got "%s" at "%s"',
                            Calendar::class,
                            is_object($translator) ? get_class($translator) : gettype($translator),
                            $locale
                        )
                    );
                }
            }
        }
    }
}
