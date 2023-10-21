# codekandis/json-codec

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

With the JSON codec you will be able to encode into and decode from JSON data in an object oriented way. It wraps PHP's functions [`json_encode()`][xtlink-php-net-json-encode] and [`json_decode()`][xtlink-php-net-json-decode].

## Index

* [Installation](#installation)
* [How to use](#how-to-use)
  * [Encoding values](#encoding-values)
  * [Decoding values](#decoding-values)
* [Differences to PHP's JSON functions](#differences-to-phps-json-functions)

## Installation

Install the latest version with

```bash
$ composer require codekandis/json-codec
```

## How to use

### Encoding values

The following example shows how to encode a value.

```php
$value = [
  'foo',
  'bar'
];

( new JsonEncoder() )
  ->encode( $value );

$options = new JsonEncoderOptions( JsonEncoderOptions::FORCE_OBJECT | JsonEncoderOptions::PRETTY_PRINT );
( new JsonEncoder() )
  ->encode( $value, $options );
```

### Decoding values

The following examples show how to decode a value.

```php
$value = '{"0":"foo","1":"bar"}';

( new JsonDecoder() )
  ->decode( $value );

$options = new JsonDecoderOptions( JsonDecoderOptions::OBJECT_AS_ARRAY );
( new JsonDecoder() )
  ->decode( $value, $options );

$options        = new JsonDecoderOptions( JsonDecoderOptions::OBJECT_AS_ARRAY );
$recursionDepth = 2;
( new JsonDecoder() )
  ->decode( $value, $options, $recursionDepth );
```

## Differences to PHP's JSON functions

[`json_decode()`][xtlink-php-net-json-encode] accepts an additional argument [`$assoc`][xtlink-php-net-json-decode-arguments] to specify if the value forced to be decoded into an associative array. This argument is omitted in the [`JsonDecoder`][srclink-json-decoder] while this behaviour can be set explicitly with the [`JsonDecoderOptions::OBJECT_TO_ARRAY`][srclink-json-decoder-options].



[xtlink-version-badge]: https://img.shields.io/badge/version-3.0.0-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.3-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net
[xtlink-php-net-json-encode]: https://www.php.net/manual/en/function.json-encode.php
[xtlink-php-net-json-decode]: https://www.php.net/manual/en/function.json-decode.php
[xtlink-php-net-json-decode-arguments]: https://www.php.net/manual/en/function.json-decode.php#refsect1-function.json-decode-parameters

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
[srclink-json-decoder]: ./src/JsonDecoder.php
[srclink-json-decoder-options]: ./src/JsonDecoderOptions.php
