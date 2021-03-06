<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\EnclosedIdeographicSupplement;

class EnclosedIdeographicSupplementTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new EnclosedIdeographicSupplement;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Enclosed Ideographic Supplement', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('1F200', $range[0]);
		$this->assertEquals('1F2FF', $range[1]);
	}
}
