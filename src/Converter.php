<?php

namespace Nikifutaki\AlphabetNumerals;

class Converter
{
  static protected $alphabet = [
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
    'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
    'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
    'Y', 'Z'
  ];

  public static function encode(int $number)
  {
    if($number < 1)return false;
    if($number > 2147483647)return false;

    $result = '';
    $count = 0;
      
    while($number)
    {
      $mod = ($number-1)%26;
      $result = self::$alphabet[$mod].$result;
      $number = ($number-$mod-1)/26;
    }
      
    return $result;
  }

  public static function decode(string $number)
  {
    if(!preg_match('/^[A-Z]{1,7}$/u',$number))return false;

    $number = strrev($number);
    $result = 0;

    for($i=0; $i<strlen($number); $i++) {
      $result += (26 ** $i) * (array_search($number[$i],self::$alphabet)+1);
    }

    return $result;
  }
}