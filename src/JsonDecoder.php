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
	public function decode( string $value, ?int $options = null, int $recursionDepth = 512 ): mixed
	{
		$decodedValue = json_decode(
			$value,
			null,
			$recursionDepth,
			$options ?? 0
		);
		( new JsonErrorHandler() )
			->handle();

		return $decodedValue;
	}
}
