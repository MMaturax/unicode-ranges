<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Coptic extends RangeAbstract
{
    const RANGE_NAME = 'Coptic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2C80',
            '2CFF',
        ];
    }
}
