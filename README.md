# Alphabet Numerals
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

## Operater
If you use it many times, Converter is better.

```php
use Nikifutaki\AlphabetNumerals\Operater;

$increment = Operater::increment('A'); // B
$decrement = Operater::decrement('AA'); // Z

or

$op = new Operator;
$increment = $op->increment('A'); // B
$decrement = $op->decrement('AA'); // Z
```