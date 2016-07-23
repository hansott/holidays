<?php

namespace HansOtt\Holiday;

use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    public function expectException($exception)
    {
        if (method_exists('PHPUnit_Framework_TestCase', 'expectException')) {
            parent::expectException($exception);
        } else {
            // PHPUnit_Framework_TestCase::setExpectedException is deprecated in PHPUnit 5.2+
            $this->setExpectedException($exception);
        }
    }
}
