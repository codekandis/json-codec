<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\JsonDecoderInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonCodec\JsonDecoder;
use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use JsonException;

/**
 * Represents a data provider providing inititated JSON decoders with invalid values, options and expected exceptions.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecoderWithInvalidValuesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonDecoder'              => new JsonDecoder(),
					'value'                    => '{"foo":"bar"}',
					'decoderOptions'           => null,
					'depth'                    => 1,
					'expectedExceptionClass'   => JsonException::class,
					'expectedExceptionCode'    => JsonErrorCodes::DEPTH,
					'expectedExceptionMessage' => JsonErrorMessages::DEPTH
				],
				1 => [
					'jsonDecoder'              => new JsonDecoder(),
					'value'                    => '{"foo":"bar"',
					'decoderOptions'           => null,
					'depth'                    => 512,
					'expectedExceptionClass'   => JsonException::class,
					'expectedExceptionCode'    => JsonErrorCodes::SYNTAX,
					'expectedExceptionMessage' => JsonErrorMessages::SYNTAX
				]
			]
		);
	}
}
