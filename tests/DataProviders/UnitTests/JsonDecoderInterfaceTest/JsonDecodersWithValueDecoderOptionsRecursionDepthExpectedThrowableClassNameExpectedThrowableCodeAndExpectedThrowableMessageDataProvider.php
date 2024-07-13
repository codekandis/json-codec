<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonDecoderInterfaceTest;

use CodeKandis\JsonCodec\JsonDecoder;
use CodeKandis\JsonCodec\Tests\Fixtures\InvalidValues;
use CodeKandis\JsonCodec\Tests\Fixtures\ValidValues;
use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use CodeKandis\PhpUnit\DataProviderInterface;
use JsonException;
use Override;

/**
 * Represents a data provider providing JSON decoders with value, decoder options, recursion depth, expected throwable class name, expected throwable code and expected throwable message.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecodersWithValueDecoderOptionsRecursionDepthExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'jsonDecoder'                => new JsonDecoder(),
				'value'                      => ValidValues::JSON_OBJECT,
				'decoderOptions'             => null,
				'recursionDepth'             => 1,
				'expectedThrowableClassName' => JsonException::class,
				'expectedThrowableCode'      => JsonErrorCodes::DEPTH,
				'expectedThrowableMessage'   => JsonErrorMessages::DEPTH
			],
			1 => [
				'jsonDecoder'                => new JsonDecoder(),
				'value'                      => InvalidValues::JSON_OBJECT,
				'decoderOptions'             => null,
				'recursionDepth'             => 512,
				'expectedThrowableClassName' => JsonException::class,
				'expectedThrowableCode'      => JsonErrorCodes::SYNTAX,
				'expectedThrowableMessage'   => JsonErrorMessages::SYNTAX
			]
		];
	}
}
