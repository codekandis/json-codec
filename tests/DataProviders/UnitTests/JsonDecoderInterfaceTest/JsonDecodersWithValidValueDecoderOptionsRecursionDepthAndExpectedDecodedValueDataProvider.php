<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonDecoderInterfaceTest;

use CodeKandis\JsonCodec\JsonDecoder;
use CodeKandis\JsonCodec\JsonDecoderOptions;
use CodeKandis\JsonCodec\Tests\Fixtures\ValidValues;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing JSON decoders with valid value, decoder options, recursion depth and expected decoded value.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecodersWithValidValueDecoderOptionsRecursionDepthAndExpectedDecodedValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'jsonDecoder'          => new JsonDecoder(),
				'validValue'           => ValidValues::JSON_STRING,
				'decoderOptions'       => null,
				'recursionDepth'       => 512,
				'expectedDecodedValue' => ValidValues::UNENCODED_STRING
			],
			1 => [
				'jsonDecoder'          => new JsonDecoder(),
				'validValue'           => ValidValues::JSON_STRING,
				'decoderOptions'       => 0,
				'recursionDepth'       => 512,
				'expectedDecodedValue' => ValidValues::UNENCODED_STRING
			],
			2 => [
				'jsonDecoder'          => new JsonDecoder(),
				'validValue'           => ValidValues::JSON_OBJECT,
				'decoderOptions'       => JsonDecoderOptions::OBJECT_AS_ARRAY,
				'recursionDepth'       => 512,
				'expectedDecodedValue' => ValidValues::UNENCODED_ARRAY
			]
		];
	}
}

