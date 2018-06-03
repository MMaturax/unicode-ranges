<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MiscellaneousSymbols;

class MiscellaneousSymbolsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MiscellaneousSymbols;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Miscellaneous Symbols', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('2600', $range['hex'][0]);
		$this->assertEquals('26FF', $range['hex'][1]);
		$this->assertEquals(9728, $range['dec'][0]);
		$this->assertEquals(9983, $range['dec'][1]);
	}
}