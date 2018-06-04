<?php

namespace UnicodeCharacterRanges;

class SupplementalArrowsB extends CharacterRange
{
    const RANGE_NAME = 'Supplemental Arrows-B';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2900',
            '297F',
        ];
    }
}