<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Ugaritic extends RangeAbstract
{
	const RANGE_NAME = 'Ugaritic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10380',
			'1039F',
		];
	}
}
