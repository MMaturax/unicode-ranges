<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class LatinExtendedA extends RangeAbstract
{
	const RANGE_NAME = 'Latin Extended-A';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0100',
			'017F'
		];
	}
}
