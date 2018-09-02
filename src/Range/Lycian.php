<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Lycian extends RangeAbstract
{
	const RANGE_NAME = 'Lycian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10280',
			'1029F',
		];
	}
}
