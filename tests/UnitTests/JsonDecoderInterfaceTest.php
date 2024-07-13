<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\UnitTests;

use CodeKandis\JsonCodec\JsonDecoderInterface;
use CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonDecoderInterfaceTest\JsonDecodersWithValidValueDecoderOptionsRecursionDepthAndExpectedDecodedValueDataProvider;
use CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonDecoderInterfaceTest\JsonDecodersWithValueDecoderOptionsRecursionDepthExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider;
use CodeKandis\JsonErrorHandler\JsonExceptionInterface;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\JsonCodec\JsonDecoderInterface`.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecoderInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `JsonDecoderInterface::decode()` throws a `CodeKandis\JsonErrorHandler\JsonException` if a JSON error occurred during decoding.
	 * @param JsonDecoderInterface $jsonDecoder The JSON decoder to test.
	 * @param string $value The value to pass.
	 * @param ?int $decoderOptions The decoder options to pass.
	 * @param int $recursionDepth The recursion depth to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( JsonDecodersWithValueDecoderOptionsRecursionDepthExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeThrowsJsonExceptionInterfaceOnJsonError( JsonDecoderInterface $jsonDecoder, string $value, ?int $decoderOptions, int $recursionDepth, string $expectedThrowableClassName, int $expectedThrowableCode, string $expectedThrowableMessage ): void
	{
		try
		{
			$jsonDecoder->decode( $value, $decoderOptions, $recursionDepth );
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
	 * Tests if the method `JsonDecoderInterface::decode()` decodes Correctly.
	 * @param JsonDecoderInterface $jsonDecoder The JSON decoder to test.
	 * @param string $validValue The valid value to pass.
	 * @param ?int $decoderOptions The decoder options to pass.
	 * @param int $recursionDepth The recursion depth to pass.
	 * @param mixed $expectedDecodedValue The expected decoded value.
	 */
	#[DataProviderExternal( JsonDecodersWithValidValueDecoderOptionsRecursionDepthAndExpectedDecodedValueDataProvider::class, 'provideData' )]
	public function testIfMethodDecodeDecodesCorrectly( JsonDecoderInterface $jsonDecoder, string $validValue, ?int $decoderOptions, int $recursionDepth, mixed $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $jsonDecoder->decode( $validValue, $decoderOptions, $recursionDepth );

		static::assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}
}
