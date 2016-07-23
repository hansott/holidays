<?php

namespace HansOtt\Holiday;

use DateTimeImmutable;

interface Holiday
{
    /**
     * @return bool
     */
    public function isOfficial();

    /**
     * @return DateTimeImmutable
     */
    public function beginsAt();

    /**
     * @return DateTimeImmutable
     */
    public function endsAt();
}
