# Australian Address Parser [![](https://github.com/michalsn/australian-address-parser/workflows/PHP%20Tests/badge.svg)](https://github.com/michalsn/australian-address-parser/actions?query=workflow%3A%22PHP+Tests%22)

Parse the address string to the array.

## Installation

	> composer require michalsn/australian-address-parser

## Usage

```php
// calling
$parser = new \Michalsn\AustralianAddressParser\Parser();
$result = $parser->parse('1/55 Rutherford St, Stafford Heights Queensland');

// will return 
[
	'state' => 'QLD',
	'suburb' => 'Stafford Heights',
	'postcode' => '4053',
	'streetType' => 'Street',
	'unitNumber' => '1',
	'streetNumber' => '55',
	'streetName' => 'Rutherford',
]
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.