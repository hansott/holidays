<?php

namespace HansOtt\Holiday;

abstract class TranslatorAbstract implements Translator
{
    private $mapping;

    /**
     * @param string[] $mapping
     */
    public function __construct(array $mapping)
    {
        $this->mapping = $mapping;
    }

    final public function getName(Holiday $holiday)
    {
        $className = get_class($holiday);

        if (isset($this->mapping[$className])) {
            return $this->mapping[$className];
        }

        throw NoTranslationFound::forHoliday($holiday);
    }
}
