<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class HangulJamoExtendedB extends RangeAbstract
{
    const RANGE_NAME = 'Hangul Jamo Extended-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            'D7B0',
            'D7FF',
        ];
    }
}
