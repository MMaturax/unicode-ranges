<?php

namespace UnicodeRanges\Range;

class CJKSymbolsAndPunctuation extends RangeAbstract
{
    const RANGE_NAME = 'CJK Symbols and Punctuation';

    public function __construct()
    {
        $this->name = self::RANGE_NAME;
        $this->range = [
            '3000',
            '303F',
        ];
    }
}