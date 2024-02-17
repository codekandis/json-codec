<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use const JSON_FORCE_OBJECT;
use const JSON_HEX_AMP;
use const JSON_HEX_APOS;
use const JSON_HEX_QUOT;
use const JSON_HEX_TAG;
use const JSON_NUMERIC_CHECK;
use const JSON_PARTIAL_OUTPUT_ON_ERROR;
use const JSON_PRESERVE_ZERO_FRACTION;
use const JSON_PRETTY_PRINT;
use const JSON_UNESCAPED_LINE_TERMINATORS;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;

/**
 * Represents the available options for encoding a value into JSON.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JsonEncoderOptions
{
	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-tag
	 * @var int
	 */
	public const int HEX_TAG = JSON_HEX_TAG;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-amp
	 * @var int
	 */
	public const int HEX_AMP = JSON_HEX_AMP;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-apos
	 * @var int
	 */
	public const int HEX_APOS = JSON_HEX_APOS;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-quot
	 * @var int
	 */
	public const int HEX_QUOT = JSON_HEX_QUOT;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-force-object
	 * @var int
	 */
	public const int FORCE_OBJECT = JSON_FORCE_OBJECT;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-numeric-check
	 * @var int
	 */
	public const int NUMERIC_CHECK = JSON_NUMERIC_CHECK;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-unescaped-slashes
	 * @var int
	 */
	public const int UNESCAPED_SLASHES = JSON_UNESCAPED_SLASHES;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-pretty-print
	 * @var int
	 */
	public const int PRETTY_PRINT = JSON_PRETTY_PRINT;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-unescaped-unicode
	 * @var int
	 */
	public const int UNESCAPED_UNICODE = JSON_UNESCAPED_UNICODE;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-partial-output-on-error
	 * @var int
	 */
	public const int PARTIAL_OUTPUT_ON_ERROR = JSON_PARTIAL_OUTPUT_ON_ERROR;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-preserve-zero-fraction
	 * @var int
	 */
	public const int PRESERVE_ZERO_FRACTION = JSON_PRESERVE_ZERO_FRACTION;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-unescaped-line-terminators
	 * @var int
	 */
	public const int UNESCAPED_LINE_TERMINATORS = JSON_UNESCAPED_LINE_TERMINATORS;
}
