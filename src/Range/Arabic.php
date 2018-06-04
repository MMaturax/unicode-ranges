<?php

namespace UnicodeRanges\Range;

class Arabic extends RangeAbstract
{
    const RANGE_NAME = 'Arabic';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '0600',
            '06FF',
        ];
    }
}