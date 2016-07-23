<?php

namespace HansOtt\Holiday;

use DateTimeImmutable;

abstract class HolidayAbstract implements Holiday
{
    private $beginsAt;

    private $endsAt;

    public function __construct(DateTimeImmutable $beginsAt, DateTimeImmutable $endsAt)
    {
        $this->beginsAt = $beginsAt;
        $this->endsAt = $endsAt;
    }

    final public function beginsAt()
    {
        return $this->beginsAt;
    }

    final public function endsAt()
    {
        return $this->endsAt;
    }
}
