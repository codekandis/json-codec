<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\UnitTests\JsonEncoderInterfaceTest;

use CodeKandis\JsonCodec\JsonEncoder;
use CodeKandis\JsonCodec\JsonEncoderOptions;
use CodeKandis\JsonCodec\Tests\Fixtures\ValidValues;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing JSON encoders with valid value, encoder options and expected encoded value.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncodersWithValidValueEncoderOptionsAndExpectedEncodedValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'jsonEncoder'          => new JsonEncoder(),
				'validValue'           => ValidValues::UNENCODED_ARRAY,
				'encoderOptions'       => null,
				'expectedEncodedValue' => ValidValues::JSON_OBJECT
			],
			1 => [
				'jsonEncoder'          => new JsonEncoder(),
				'validValue'           => ValidValues::UNENCODED_ARRAY,
				'encoderOptions'       => 0,
				'expectedEncodedValue' => ValidValues::JSON_OBJECT
			],
			2 => [
				'jsonEncoder'          => new JsonEncoder(),
				'validValue'           => ValidValues::UNENCODED_ARRAY,
				'encoderOptions'       => JsonEncoderOptions::PRETTY_PRINT,
				'expectedEncodedValue' => ValidValues::FORMATTED_JSON_OBJECT
			]
		];
	}
}
