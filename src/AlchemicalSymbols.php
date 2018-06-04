<?php

namespace UnicodeCharacterRanges;

class AlchemicalSymbols extends CharacterRange
{
	const RANGE_NAME = 'Alchemical Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F700',
			'1F77F',
		];
	}
}