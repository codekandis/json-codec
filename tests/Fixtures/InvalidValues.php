<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\Fixtures;

/**
 * Represents an enumeration of invalid values.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class InvalidValues
{
	/**
	 * Represents an invalid JSON object.
	 * @var string
	 */
	public const string JSON_OBJECT = '{"foo":"bar"';
}
