<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class SupplementalPunctuation extends AbstractRange
{
    const RANGE_NAME = 'Supplemental Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '2E00',
            '2E7F',
        ];
    }
}
