<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Telugu extends RangeAbstract
{
    const RANGE_NAME = 'Telugu';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0C00',
            '0C7F',
        ];
    }
}
