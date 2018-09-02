<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Rejang extends RangeAbstract
{
    const RANGE_NAME = 'Rejang';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'A930',
            'A95F',
        ];
    }
}
