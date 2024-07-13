<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\UnitTests;

use CodeKandis\JsonCodec\JsonEncoderInterface;
use CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonEncoderInterfaceTest\JsonEncodersWithInvalidValueEncoderOptionsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider;
use CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonEncoderInterfaceTest\JsonEncodersWithValidValueEncoderOptionsAndExpectedEncodedValueDataProvider;
use CodeKandis\JsonErrorHandler\JsonExceptionInterface;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\JsonCodec\JsonEncoderInterface`.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncoderInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `JsonEncoderInterface::encode()` throws a `CodeKandis\JsonErrorHandler\JsonException` if a JSON error occurred during encoding.
	 * @param JsonEncoderInterface $jsonEncoder The JSON encoder to test.
	 * @param mixed $invalidValue The invalid value to pass.
	 * @param ?int $encoderOptions The encoder options to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( JsonEncodersWithInvalidValueEncoderOptionsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodEncodeThrowsJsonExceptionInterfaceOnJsonError( JsonEncoderInterface $jsonEncoder, mixed $invalidValue, ?int $encoderOptions, string $expectedThrowableClassName, int $expectedThrowableCode, string $expectedThrowableMessage ): void
	{
		try
		{
			$jsonEncoder->encode( $invalidValue, $encoderOptions );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( JsonExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableCode,
				$throwable->getCode()
			);
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `JsonEncoderInterface::encode()` encodes correctly.
	 * @param JsonEncoderInterface $jsonEncoder The JSON encoder to test.
	 * @param mixed $validValue The valid value to encode.
	 * @param ?int $encoderOptions The encoder options of the encoder.
	 * @param string $expectedEncodedValue The expected encoded value.
	 */
	#[DataProviderExternal( JsonEncodersWithValidValueEncoderOptionsAndExpectedEncodedValueDataProvider::class, 'provideData' )]
	public function testIfMethodEncodeEncodesCorrectly( JsonEncoderInterface $jsonEncoder, mixed $validValue, ?int $encoderOptions, string $expectedEncodedValue ): void
	{
		$resultedEncodedValue = $jsonEncoder->encode( $validValue, $encoderOptions );

		static::assertSame( $expectedEncodedValue, $resultedEncodedValue );
	}
}
