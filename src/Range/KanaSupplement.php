<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class KanaSupplement extends RangeAbstract
{
	const RANGE_NAME = 'Kana Supplement';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1B000',
			'1B0FF',
		];
	}
}
