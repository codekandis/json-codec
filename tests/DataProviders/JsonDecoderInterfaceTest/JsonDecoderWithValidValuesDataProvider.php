<?php declare( strict_types = 1 );
namespace CodeKandis\JsonCodec\Tests\DataProviders\JsonDecoderInterfaceTest;

use ArrayIterator;
use CodeKandis\JsonCodec\JsonDecoder;
use CodeKandis\JsonCodec\JsonDecoderOptions;

/**
 * Represents a data provider providing inititated JSON decoders with valid values and options.
 * @package codekandis/json-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class JsonDecoderWithValidValuesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'jsonDecoder'          => new JsonDecoder(),
					'value'                => '"foo"',
					'decoderOptions'       => null,
					'depth'                => 512,
					'expectedDecodedValue' => 'foo'
				],
				1 => [
					'jsonDecoder'          => new JsonDecoder(),
					'value'                => '{"foo":"bar"}',
					'decoderOptions'       => new JsonDecoderOptions( JsonDecoderOptions::OBJECT_AS_ARRAY ),
					'depth'                => 512,
					'expectedDecodedValue' => [
						'foo' => 'bar'
					]
				]
			]
		);
	}
}
