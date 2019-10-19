<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use JsonException;

/**
 * Represents the interface of all JSON decoders.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonDecoderInterface
{
	/**
	 * Decodes a value from a JSON string.
	 * @param string $value The JSON string to decode.
	 * @param ?JsonDecoderOptions $options The decoding options.
	 * @param int $depth The recursion depth.
	 * @return mixed The decoded value.
	 * @throws JsonException An error occurred during decoding.
	 */
	public function decode( string $value, ?JsonDecoderOptions $options = null, int $depth = 512 );
}
