<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\UnitTests;

use ArrayIterator;
use CodeKandis\JsonCodec\JsonEncoderInterface;
use CodeKandis\JsonCodec\JsonEncoderOptions;
use CodeKandis\JsonCodec\Tests\DataProviders\JsonEncoderInterfaceTest\JsonEncoderWithInvalidValuesDataProvider;
use CodeKandis\JsonCodec\Tests\DataProviders\JsonEncoderInterfaceTest\JsonEncoderWithValidValuesDataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Represents the test case to test objects against the `JsonEncoderInterface`.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncoderInterfaceTest extends TestCase
{
	/**
	 * Provides inititated JSON encoders with valid values and options.
	 * @return ArrayIterator The inititated JSON encoders with valid values and options.
	 */
	public function jsonEncoderWithValidValuesDataProvider(): ArrayIterator
	{
		return new JsonEncoderWithValidValuesDataProvider();
	}

	/**
	 * Tests if `JsonEncoderInterface::encode()` encodes correctly.
	 * @param JsonEncoderInterface $jsonEncoder The JSON encoder to test.
	 * @param mixed $value The value to encode.
	 * @param ?JsonEncoderOptions $encoderOptions The encoding options of the encoder.
	 * @param string $expectedEncodedValue The expected encoded value.
	 * @dataProvider jsonEncoderWithValidValuesDataProvider
	 */
	public function testEncodeEncodesCorrectly( JsonEncoderInterface $jsonEncoder, $value, ?JsonEncoderOptions $encoderOptions, string $expectedEncodedValue ): void
	{
		$resultedEncodedValue = $jsonEncoder->encode( $value, $encoderOptions );

		$this->assertSame( $expectedEncodedValue, $resultedEncodedValue );
	}

	/**
	 * Provides inititated JSON encoders with invalid values, options and expected exceptions.
	 * @return ArrayIterator The inititated JSON encoders with invalid values, options and expected exceptions.
	 */
	public function jsonEncoderWithInvalidValuesDataProvider(): ArrayIterator
	{
		return new JsonEncoderWithInvalidValuesDataProvider();
	}

	/**
	 * Tests if `JsonEncoderInterface::encode()` throws an exception if an error occurred during encoding.
	 * @param JsonEncoderInterface $jsonEncoder The JSON encoder to test.
	 * @param mixed $value The value to encode.
	 * @param ?JsonEncoderOptions $encoderOptions The encoding options of the encoder.
	 * @param string $expectedExceptionClassName The class name of the expected exception.
	 * @param int $expectedExceptionCode The error code of the expected exception.
	 * @param string $expectedExceptionMessage The error message of the expected exception.
	 * @dataProvider jsonEncoderWithInvalidValuesDataProvider
	 */
	public function testEncodeThrowsExceptionOnError( JsonEncoderInterface $jsonEncoder, $value, ?JsonEncoderOptions $encoderOptions, string $expectedExceptionClassName, int $expectedExceptionCode, string $expectedExceptionMessage ): void
	{
		$this->expectException( $expectedExceptionClassName );
		$this->expectExceptionCode( $expectedExceptionCode );
		$this->expectExceptionMessage( $expectedExceptionMessage );

		$jsonEncoder->encode( $value, $encoderOptions );
	}
}
