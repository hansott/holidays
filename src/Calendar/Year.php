<?php

namespace HansOtt\Holiday\Calendar;

use DateTimeImmutable;
use InvalidArgumentException;

final class Year
{
    private $year;

    /**
     * @param int $year
     */
    public function __construct($year)
    {
        $this->assertValidYear($year);
        $this->year = (int) $year;
    }

    public static function current()
    {
        $now = new DateTimeImmutable();
        $currentYear = (int) $now->format('Y');

        return new static($currentYear);
    }

    public function toInt()
    {
        return $this->year;
    }

    public function __toString()
    {
        return (string) $this->year;
    }

    private function assertValidYear($year)
    {
        if (is_int($year) === false) {
            throw new InvalidArgumentException(
                sprintf(
                    'Expected an integer as $year but instead got "%s"',
                    is_object($year) ? get_class($year) : gettype($year)
                )
            );
        }
    }
}
