<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\Phlags\AbstractFlagable;
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
class JsonEncoderOptions extends AbstractFlagable
{
	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-tag
	 */
	public const HEX_TAG = JSON_HEX_TAG;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-amp
	 */
	public const HEX_AMP = JSON_HEX_AMP;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-apos
	 */
	public const HEX_APOS = JSON_HEX_APOS;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-hex-quot
	 */
	public const HEX_QUOT = JSON_HEX_QUOT;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-force-object
	 */
	public const FORCE_OBJECT = JSON_FORCE_OBJECT;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-numeric-check
	 */
	public const NUMERIC_CHECK = JSON_NUMERIC_CHECK;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-unescaped-slashes
	 */
	public const UNESCAPED_SLASHES = JSON_UNESCAPED_SLASHES;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-pretty-print
	 */
	public const PRETTY_PRINT = JSON_PRETTY_PRINT;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-unescaped-unicode
	 */
	public const UNESCAPED_UNICODE = JSON_UNESCAPED_UNICODE;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-partial-output-on-error
	 */
	public const PARTIAL_OUTPUT_ON_ERROR = JSON_PARTIAL_OUTPUT_ON_ERROR;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-preserve-zero-fraction
	 */
	public const PRESERVE_ZERO_FRACTION = JSON_PRESERVE_ZERO_FRACTION;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-unescaped-line-terminators
	 */
	public const UNESCAPED_LINE_TERMINATORS = JSON_UNESCAPED_LINE_TERMINATORS;
}
