<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use CodeKandis\JsonErrorHandler\JsonErrorHandlerInterface;
use CodeKandis\Types\BaseObject;
use Override;
use function json_decode;

/**
 * Represents a JSON decoder.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecoder extends BaseObject implements JsonDecoderInterface
{
	/**
	 * Stores the JSON error handler.
	 */
	private JsonErrorHandlerInterface $errorHandler;

	/**
	 * @inheritDoc
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

		$this->errorHandler ??= new JsonErrorHandler();
		$this->errorHandler->handle();

		return $decodedValue;
	}
}
