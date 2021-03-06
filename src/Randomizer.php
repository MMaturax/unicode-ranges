<?php

namespace UnicodeRanges;

class Randomizer
{
    public static function char(array $charRanges)
    {
        $key = array_rand($charRanges, 1);
        $rand = rand(
            hexdec($charRanges[$key]->range()[0]),
            hexdec($charRanges[$key]->range()[1])
        );

        return Converter::dec2unicode($rand);
    }

    public static function letter(array $charRanges)
    {
        for ($i = 0; $i <= 50; $i++) {
            $letter = self::char($charRanges);
            if (preg_match('/\p{L}/u', $letter)) {
                return $letter;
            }
        }

        return false;
    }

    public static function number(array $charRanges)
    {
        for ($i = 0; $i <= 50; $i++) {
            $number = self::char($charRanges);
            if (preg_match('/\p{N}/u', $number)) {
                return $number;
            }
        }

        return false;
    }

    public static function printableChar(array $charRanges)
    {
        for ($i = 0; $i <= 50; $i++) {
            $char = self::char($charRanges);
            if (preg_match('/(\p{L}|\p{N}|\p{P}|\p{S})/u', $char)) {
                return $char;
            }
        }

        return false;
    }

    public static function letters(array $charRanges, $length)
    {
        $string = '';
        for ($i = 1; $i <= $length; ++$i) {
            $string .= self::letter($charRanges);
        }

        return $string;
    }

    public static function numbers(array $charRanges, $length)
    {
        $string = '';
        for ($i = 1; $i <= $length; ++$i) {
            $string .= self::number($charRanges);
        }

        return $string;
    }

    public static function printableChars(array $charRanges, $length)
    {
        $string = '';
        for ($i = 1; $i <= $length; ++$i) {
            $string .= self::printableChar($charRanges);
        }

        return $string;
    }
}
