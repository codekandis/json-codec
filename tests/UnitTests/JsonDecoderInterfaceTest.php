<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\UnitTests;

use ArrayIterator;
use CodeKandis\JsonCodec\JsonDecoderInterface;
use CodeKandis\JsonCodec\JsonDecoderOptions;
use CodeKandis\JsonCodec\Tests\DataProviders\JsonDecoderInterfaceTest\JsonDecoderWithInvalidValuesDataProvider;
use CodeKandis\JsonCodec\Tests\DataProviders\JsonDecoderInterfaceTest\JsonDecoderWithValidValuesDataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Represents the test case to test objects against the `JsonDecoderInterface`.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecoderInterfaceTest extends TestCase
{
	/**
	 * Provides inititated JSON decoders with valid values and options.
	 * @return ArrayIterator The inititated JSON decoders with valid values and options.
	 */
	public function jsonDecoderWithValidValuesDataProvider(): ArrayIterator
	{
		return new JsonDecoderWithValidValuesDataProvider();
	}

	/**
	 * Tests if `JsonDecoderInterface::decode()` decodes correctly.
	 * @param JsonDecoderInterface $jsonDecoder The JSON decoder to test.
	 * @param mixed $value The value to decode.
	 * @param ?JsonDecoderOptions $decoderOptions The decoding options of the encoder.
	 * @param int $depth The recursion depth.
	 * @param mixed $expectedDecodedValue The expected decoded value.
	 * @dataProvider jsonDecoderWithValidValuesDataProvider
	 */
	public function testDecodeDecodesCorrectly( JsonDecoderInterface $jsonDecoder, string $value, ?JsonDecoderOptions $decoderOptions, int $depth, $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $jsonDecoder->decode( $value, $decoderOptions, $depth );

		$this->assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}

	/**
	 * Provides inititated JSON decoders with invalid values, options and expected exceptions.
	 * @return ArrayIterator The inititated JSON decoders with invalid values, options and expected exceptions.
	 */
	public function jsonDecoderWithInvalidValuesDataProvider(): ArrayIterator
	{
		return new JsonDecoderWithInvalidValuesDataProvider();
	}

	/**
	 * Tests if `JsonDecoderInterface::decode()` throws an exception if an error occurred during decoding.
	 * @param JsonDecoderInterface $jsonDecoder The JSON decoder to test.
	 * @param string $value The value to decode.
	 * @param ?JsonDecoderOptions $decoderOptions The decoding options of the decoder.
	 * @param int $depth The recursion depth.
	 * @param string $expectedExceptionClassName The class name of the expected exception.
	 * @param int $expectedExceptionCode The error code of the expected exception.
	 * @param string $expectedExceptionMessage The error message of the expected exception.
	 * @dataProvider jsonDecoderWithInvalidValuesDataProvider
	 */
	public function testDecodeThrowsExceptionOnError( JsonDecoderInterface $jsonDecoder, string $value, ?JsonDecoderOptions $decoderOptions, int $depth, string $expectedExceptionClassName, int $expectedExceptionCode, $expectedExceptionMessage ): void
	{
		$this->expectException( $expectedExceptionClassName );
		$this->expectExceptionCode( $expectedExceptionCode );
		$this->expectExceptionMessage( $expectedExceptionMessage );

		$jsonDecoder->decode( $value, $decoderOptions, $depth );
	}
}
