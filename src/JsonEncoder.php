<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use Override;
use function json_encode;

/**
 * Represents a JSON encoder.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncoder implements JsonEncoderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public function encode( mixed $value, ?int $options = null ): string
	{
		$encodedValue = json_encode(
			$value,
			$options ?? 0
		);
		( new JsonErrorHandler() )
			->handle();

		return $encodedValue;
	}
}
