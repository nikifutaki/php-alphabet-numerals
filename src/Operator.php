<?php

namespace Nikifutaki\AlphabetNumerals;

class Operator
{
  public static function increment(string $number)
  {
    if(!preg_match('/[A-Z]/u',$number))return false;

    $native = Converter::decode($number);
    $result = Converter::encode($native+1);
    
    return $result;
  }

  public static function decrement(string $number)
  {
    if(!preg_match('/[A-Z]/u',$number))return false;

    $native = Converter::decode($number);
    $result = Converter::encode($native-1);
    
    return $result;
  }
}