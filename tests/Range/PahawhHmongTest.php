<?php

namespace UnicodeRanges\Range\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeRanges\Range\PahawhHmong;

class PahawhHmongTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new PahawhHmong;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Pahawh Hmong', $this->charRange->name());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->range();

		$this->assertEquals('16B00', $range[0]);
		$this->assertEquals('16B8F', $range[1]);
	}
}
