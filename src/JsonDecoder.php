<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use Override;
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
	#[Override]
	public function decode( string $value, ?JsonDecoderOptions $options = null, int $recursionDepth = 512 ): mixed
	{
		$preparedOptions = $options ?? new JsonDecoderOptions();
		$decodedValue    = json_decode( $value, null, $recursionDepth, $preparedOptions() );
		( new JsonErrorHandler() )
			->handle();

		return $decodedValue;
	}
}
