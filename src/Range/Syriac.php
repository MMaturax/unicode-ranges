<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Syriac extends RangeAbstract
{
    const RANGE_NAME = 'Syriac';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0700',
            '074F',
        ];
    }
}
