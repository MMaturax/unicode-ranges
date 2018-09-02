<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Chakma extends RangeAbstract
{
	const RANGE_NAME = 'Chakma';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11100',
			'1114F',
		];
	}
}
