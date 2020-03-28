# Australian Address Parser

Parse the address string to the array.

## Installation via composer

	> composer require michalsn/australian-address-parser

## Usage

```php
	// calling
	$result = (new \Michalsn\AustralianAddressParser\Parser())->parse('1/55 Rutherford St, Stafford Heights Queensland');

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