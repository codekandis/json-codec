<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec;

use CodeKandis\JsonErrorHandler\JsonErrorHandler;
use CodeKandis\JsonErrorHandler\JsonErrorHandlerInterface;
use CodeKandis\Types\BaseObject;
use Override;
use function json_encode;

/**
 * Represents a JSON encoder.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncoder extends BaseObject implements JsonEncoderInterface
{
	/**
	 * Stores the JSON error handler.
	 */
	private JsonErrorHandlerInterface $errorHandler;

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function encode( mixed $value, ?int $options = null ): string
	{
		$encodedValue = json_encode(
			$value,
			$options ?? 0
		);

		$this->errorHandler ??= new JsonErrorHandler();
		$this->errorHandler->handle();

		return $encodedValue;
	}
}
