<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\SupplementalArrowsC;

class SupplementalArrowsCTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new SupplementalArrowsC;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Supplemental Arrows-C', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F800', $range[0]);
		$this->assertEquals('1F8FF', $range[1]);
	}
}