<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Khudawadi extends RangeAbstract
{
	const RANGE_NAME = 'Khudawadi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'112B0',
			'112FF',
		];
	}
}
