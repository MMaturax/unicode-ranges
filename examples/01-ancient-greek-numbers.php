<?php

require __DIR__.'/../vendor/autoload.php';

use UnicodeRanges\Range\AncientGreekNumbers;

$ancientGreekNumbers = new AncientGreekNumbers;

echo "Total: {$ancientGreekNumbers->count()}".PHP_EOL;
echo "Range: {$ancientGreekNumbers->range()[0]}-{$ancientGreekNumbers->range()[0]}".PHP_EOL;
echo 'Characters: ';
$chars = $ancientGreekNumbers->chars();
foreach ($chars as $char) {
    echo $char;
}
echo PHP_EOL;