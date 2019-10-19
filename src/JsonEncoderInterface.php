<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use JsonException;

/**
 * Represents the interface of all JSON encoders.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JsonEncoderInterface
{
	/**
	 * Encodes a value into a JSON string.
	 * @param mixed $value The value to encode.
	 * @param ?JsonEncoderOptions $options The encoding options.
	 * @return string The encoded JSON string.
	 * @throws JsonException An error occurred during encoding.
	 */
	public function encode( $value, ?JsonEncoderOptions $options = null ): string;
}
