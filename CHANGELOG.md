# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [3.0.0] - 2023-10-25

### Fixed

* type hints
* method naming
* PHPDoc

### Changed

* composer package
  * description
  * keywords
  * require
    * `php` [>=8.2]
  * require-dev
    * `codekandis/phpunit` [^5.0.0]
* added
  * version
  * require-dev
    * `rector/rector` [^0.18.5]
  * autoload-dev
    * psr-4
      * `CodeKandis\JsonCodec\Build\`
        * `build/`
* PHPUnit tests
  * configuration
  * externalized data providers
* exception handling
* `CODE_OF_CONDUCT.md`
* `README.md`
  * PHP version `8.2`

### Added

* type hints
* rector
  * configuration script
  * shell script

[3.0.0]: https://github.com/codekandis/json-codec/compare/2.0.1..3.0.0

---
## [2.0.1] - 2021-01-21

### Changed

* `README.md`

[2.0.1]: https://github.com/codekandis/json-codec/compare/2.0.0..2.0.1

---
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
