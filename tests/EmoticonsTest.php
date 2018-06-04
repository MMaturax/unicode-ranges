<?php

namespace UnicodeCharacterRanges\Tests;

use PHPUnit\Framework\TestCase;
use UnicodeCharacterRanges\Emoticons;

class EmoticonsTest extends TestCase
{
	private $charRange;

	public function __construct()
	{
		$this->charRange = new Emoticons;
	}

	/**
	 * @test
	 */
	public function get_name()
	{
		$this->assertEquals('Emoticons', $this->charRange->getName());
	}

	/**
	 * @test
	 */
	public function get_range()
	{
		$range = $this->charRange->getRange();

		$this->assertEquals('1F600', $range[0]);
		$this->assertEquals('1F64F', $range[1]);
	}
}