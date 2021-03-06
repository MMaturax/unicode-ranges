<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\IpaExtensions;

class IpaExtensionsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new IpaExtensions;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('IPA Extensions', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('0250', $range[0]);
		$this->assertEquals('02AF', $range[1]);
	}
}
