<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\JsonEncoderInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonCodec\JsonEncoder;
use CodeKandis\JsonCodec\JsonEncoderOptions;

/**
 * Represents a data provider providing
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonEncoderWithValidValuesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonEncoder'          => new JsonEncoder(),
					'value'                => [ 'foo' => 'bar' ],
					'encoderOptions'       => null,
					'expectedEncodedValue' => '{"foo":"bar"}'
				],
				1 => [
					'jsonEncoder'          => new JsonEncoder(),
					'value'                => [ 'foo' => 'bar' ],
					'encoderOptions'       => new JsonEncoderOptions(),
					'expectedEncodedValue' => '{"foo":"bar"}'
				],
				2 => [
					'jsonEncoder'          => new JsonEncoder(),
					'value'                => [ 'foo' => 'bar' ],
					'encoderOptions'       => new JsonEncoderOptions( JsonEncoderOptions::PRETTY_PRINT ),
					'expectedEncodedValue' => "{\n    \"foo\": \"bar\"\n}"
				]
			]
		);
	}
}
