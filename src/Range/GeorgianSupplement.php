<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class GeorgianSupplement extends AbstractRange
{
    const RANGE_NAME = 'Georgian Supplement';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2D00',
            '2D2F',
        ];
    }
}
