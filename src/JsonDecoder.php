<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use function json_decode;

/**
 * Represents a JSON decoder.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecoder implements JsonDecoderInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function decode( string $value, ?JsonDecoderOptions $options = null, int $depth = 512 )
	{
		$preparedOptions = $options ?? new JsonDecoderOptions();
		$decodedValue    = json_decode( $value, null, $depth, $preparedOptions() );
		( new JsonErrorHandler() )
			->handle();

		return $decodedValue;
	}
}
