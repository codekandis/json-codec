<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonEncoderInterfaceTest;

use CodeKandis\JsonCodec\JsonEncoder;
use CodeKandis\JsonErrorHandler\JsonErrorCodes;
use CodeKandis\JsonErrorHandler\JsonErrorMessages;
use CodeKandis\JsonErrorHandler\JsonException;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;
use function fopen;

/**
 * Represents a data provider providing JSON encoders with invalid value, encoder options, expected throwable class name, expected throwable code and expected throwable message.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncodersWithInvalidValueEncoderOptionsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'jsonEncoder'                => new JsonEncoder(),
				'invalidValue'               => fopen( 'php://memory', 'rb' ),
				'encoderOptions'             => null,
				'expectedThrowableClassName' => JsonException::class,
				'expectedThrowableCode'      => JsonErrorCodes::UNSUPPORTED_TYPE,
				'expectedThrowableMessage'   => JsonErrorMessages::UNSUPPORTED_TYPE
			]
		];
	}
}
