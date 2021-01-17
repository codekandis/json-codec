# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [2.0.0] - 2021-01-17

### Changed

* composer package dependencies
  * removed
    * `sensiolabs/security-checker`
    * `phpunit/phpunit`
  * changed
    * `minimum-stability` [stable]
    * `php` [^7.4]
    * `codekandis/phlags` [^3]
    * `codekandis/json-error-handler` [^2]
  * added
    * `codekandis/phpunit` [^3]

[2.0.0]: https://github.com/codekandis/json-codec/compare/1.0.0..2.0.0

---
## [1.0.0] - 2019-08-07

### Added

* `JsonEncoderOptions` representing PHP's native JSON encoding options
* `JsonDecoderOptions` representing PHP's native JSON decoding options
* `JsonEncoder` encodes values into a JSON string
* `JsonDecoder` decodes values from a JSON string
* `PHPUnit` tests
* `README.md`
* `CHANGELOG.md`

[1.0.0]: https://github.com/codekandis/json-codec/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.0.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
