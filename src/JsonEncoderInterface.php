<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonException;

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
	 * @param ?int $options The encoding options.
	 * @return string The encoded JSON string.
	 * @throws JsonException An error occurred during encoding.
	 */
	public function encode( mixed $value, ?int $options = null ): string;
}
