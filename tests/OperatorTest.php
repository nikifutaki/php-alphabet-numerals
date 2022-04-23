<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Nikifutaki\AlphabetNumerals\Operator;

class OperatorTest extends TestCase
{
    public function testIncrement()
    {
      $this->assertSame(false, Operator::increment(0));
      $this->assertSame('B', Operator::increment('A'));
      $this->assertSame('AA', Operator::increment('Z'));
      $this->assertSame('AB', Operator::increment('AA'));
      $this->assertSame('AAA', Operator::increment('ZZ'));
      $this->assertSame('YDK', Operator::increment('YDJ'));
      $this->assertSame('GVQ', Operator::increment('GVP'));
      $this->assertSame('UOCMW', Operator::increment('UOCMV'));
    }

    public function testDecrement()
    {
      $this->assertSame(false, Operator::decrement(0));
      $this->assertSame(false, Operator::decrement('A'));
      $this->assertSame('A', Operator::decrement('B'));
      $this->assertSame('Z', Operator::decrement('AA'));
      $this->assertSame('AA', Operator::decrement('AB'));
      $this->assertSame('ZZ', Operator::decrement('AAA'));
      $this->assertSame('YDJ', Operator::decrement('YDK'));
      $this->assertSame('GVP', Operator::decrement('GVQ'));
      $this->assertSame('UOCMV', Operator::decrement('UOCMW'));
    }
}