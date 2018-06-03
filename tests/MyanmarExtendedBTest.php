<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\MyanmarExtendedB;

class MyanmarExtendedBTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new MyanmarExtendedB;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Myanmar Extended-B', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('A9E0', $range[0]);
		$this->assertEquals('A9FF', $range[1]);
	}
}
