<?php

require __DIR__.'/../../vendor/autoload.php';

use UnicodeRanges\Converter;

$dec = 926;
$unicode = Converter::dec2unicode($dec);

echo "$dec is $unicode" . PHP_EOL;
