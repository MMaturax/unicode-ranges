<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Ethiopic extends AbstractRange
{
    const RANGE_NAME = 'Ethiopic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1200',
            '137F',
        ];
    }
}
