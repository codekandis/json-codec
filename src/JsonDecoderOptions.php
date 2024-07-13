<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\Types\BaseObject;
use const JSON_BIGINT_AS_STRING;
use const JSON_OBJECT_AS_ARRAY;

/**
 * Represents the available options to decode a value from a JSON string.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JsonDecoderOptions extends BaseObject implements JsonDecoderOptionsInterface
{
	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-object-as-array
	 */
	public const int OBJECT_AS_ARRAY = JSON_OBJECT_AS_ARRAY;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-bigint-as-string
	 */
	public const int BIGINT_AS_STRING = JSON_BIGINT_AS_STRING;
}
