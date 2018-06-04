<?php

namespace UnicodeRanges\Range;

class Balinese extends RangeAbstract
{
    const RANGE_NAME = 'Balinese';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '1B00',
            '1B7F',
        ];
    }
}