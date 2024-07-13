<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\Fixtures;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValues
{
	/**
	 * Represents a valid JSON string.
	 * @var string
	 */
	public const string JSON_STRING = '"foo"';

	/**
	 * Represents a valid JSON object.
	 * @var string
	 */
	public const string JSON_OBJECT = '{"foo":"bar"}';

	/**
	 * Represents a valid formatted JSON object.
	 * @var string
	 */
	public const string FORMATTED_JSON_OBJECT = "{\n    \"foo\": \"bar\"\n}";

	/**
	 * Represents a valid unencoded string.
	 * @var string
	 */
	public const string UNENCODED_STRING = 'foo';

	/**
	 * Represents a valid unencoded object.
	 * @var array
	 */
	public const array UNENCODED_ARRAY = [
		'foo' => 'bar'
	];
}
