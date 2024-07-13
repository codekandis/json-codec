<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\Types\BaseObject;
use const JSON_BIGINT_AS_STRING;
use const JSON_OBJECT_AS_ARRAY;

/**
 * Represents the available options for decoding a value from JSON.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JsonDecoderOptions extends BaseObject implements JsonDecoderOptionsInterface
{
	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-object-as-array
	 * @var int
	 */
	public const int OBJECT_AS_ARRAY = JSON_OBJECT_AS_ARRAY;

	/**
	 * @see https://www.php.net/manual/en/json.constants.php#constant.json-bigint-as-string
	 * @var int
	 */
	public const int BIGINT_AS_STRING = JSON_BIGINT_AS_STRING;
}
