<?php

namespace HansOtt\Holiday;

interface Translator
{
    /**
     * Get the name for a holiday.
     *
     * @param Holiday $holiday
     *
     * @throws NoTranslationFound
     *
     * @return string
     */
    public function getName(Holiday $holiday);
}
