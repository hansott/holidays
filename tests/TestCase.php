<?php

namespace HansOtt\Holiday;

use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    public function expectException($exception)
    {
        $parents = class_parents($this);
        foreach ($parents as $parent) {
            if (method_exists($parent, 'expectException')) {
                return parent::expectException($exception);
            }
        }

        // PHPUnit_Framework_TestCase::setExpectedException is deprecated in PHPUnit 5.2+
        return $this->setExpectedException($exception);
    }
}
