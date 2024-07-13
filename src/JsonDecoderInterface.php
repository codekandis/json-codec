<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonException;

/**
 * Represents the interface of any JSON decoder.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonDecoderInterface
{
	/**
	 * Decodes a value from a JSON string.
	 * @param string $value The JSON string to decode.
	 * @param ?int $options The decoding options.
	 * @param int $recursionDepth The recursion depth.
	 * @return mixed The decoded value.
	 * @throws JsonException An error occurred during decoding.
	 */
	public function decode( string $value, ?int $options = null, int $recursionDepth = 512 ): mixed;
}
