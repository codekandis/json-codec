<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\JsonEncoderInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonCodec\JsonEncoder;
use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use JsonException;
use function fopen;

/**
 * Represents a data provider providing inititated JSON encoders with invalid values, options and expected exceptions.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncoderWithInvalidValuesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonEncoder'                => new JsonEncoder(),
					'value'                      => fopen( 'php://memory', 'rb' ),
					'encoderOptions'             => null,
					'expectedExceptionClassName' => JsonException::class,
					'expectedExceptionCode'      => JsonErrorCodes::UNSUPPORTED_TYPE,
					'expectedExceptionMessage'   => JsonErrorMessages::UNSUPPORTED_TYPE
				]
			]
		);
	}
}
