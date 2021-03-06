# Alphabet Numerals

[![Test](https://github.com/nikifutaki/php-alphabet-numerals/actions/workflows/test.yml/badge.svg?branch=main)](https://github.com/nikifutaki/php-alphabet-numerals/actions/workflows/test.yml)
[![Version](https://img.shields.io/packagist/v/nikifutaki/alphabet-numerals)](https://packagist.org/packages/nikifutaki/alphabet-numerals)
[![License](https://img.shields.io/github/license/nikifutaki/php-alphabet-numerals)](https://github.com/nikifutaki/php-alphabet-numerals/blob/main/LICENSE)

PHP Alphabet Numerals(base 26oid) Library

# Usage

```
composer require nikifutaki/alphabet-numerals
```

## Converter

```php
use Nikifutaki\AlphabetNumerals\Converter;

$encode = Converter::encode(50); // AX
$decode = Converter::decode('C'); // 3

or

$cv = new Converter;
$encode = $cv->encode(50); // AX
$decode = $cv->decode('C'); // 3
```

## Operator
If you use it many times, Converter is better.

```php
use Nikifutaki\AlphabetNumerals\Operator;

$increment = Operator::increment('A'); // B
$decrement = Operator::decrement('AA'); // Z

or

$op = new Operator;
$increment = $op->increment('A'); // B
$decrement = $op->decrement('AA'); // Z
```
