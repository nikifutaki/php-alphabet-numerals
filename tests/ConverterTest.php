<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Nikifutaki\AlphabetNumerals\Converter;

class ConverterTest extends TestCase
{
    public function testEncode()
    {
      $this->assertSame(false, Converter::encode(0));
      $this->assertSame('A', Converter::encode(1));
      $this->assertSame('Z', Converter::encode(26));
      $this->assertSame('AA', Converter::encode(27));
      $this->assertSame('AJ', Converter::encode(36));
      $this->assertSame('YZ', Converter::encode(676));
      $this->assertSame('GVP', Converter::encode(5320));
      $this->assertSame('UOCMV', Converter::encode(9862524));
    }

    public function testDecode()
    {
      $this->assertSame(false, Converter::decode(0));
      $this->assertSame(1, Converter::decode('A'));
      $this->assertSame(26, Converter::decode('Z'));
      $this->assertSame(27, Converter::decode('AA'));
      $this->assertSame(36, Converter::decode('AJ'));
      $this->assertSame(676, Converter::decode('YZ'));
      $this->assertSame(5320, Converter::decode('GVP'));
      $this->assertSame(9862524, Converter::decode('UOCMV'));
    }
}