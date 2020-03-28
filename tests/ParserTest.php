<?php

use PHPUnit\Framework\TestCase;
use Michalsn\AustralianAddressParser\Parser;

class ParserTest extends TestCase
{
    public function testWithNoPostcode(): void
    {
        $result = (new Parser())->parse('1/55 Rutherford St, Stafford Heights Queensland');
        
        $this->assertEquals([
            'state' => 'QLD',
            'suburb' => 'Stafford Heights',
            'postcode' => '4053',
            'streetType' => 'Street',
            'unitNumber' => '1',
            'streetNumber' => '55',
            'streetName' => 'Rutherford',
        ], $result);
    }

    public function testWithUnitAndShortStreetType(): void
    {
        $result = (new Parser())->parse('Unit 57, 18 Whitley St, Mount Gravatt East, Qld 4122');
        
        $this->assertEquals([
            'state' => 'QLD',
            'suburb' => 'Mount Gravatt East',
            'postcode' => '4122',
            'streetType' => 'Street',
            'unitNumber' => '57',
            'streetNumber' => '18',
            'streetName' => 'Whitley',
        ], $result);
    }

    public function testWithDoubleNumber(): void
    {
        $result = (new Parser())->parse('918/348-354 Sussex Street, Sydney, NSW 2000');
        
        $this->assertEquals([
            'state' => 'NSW',
            'suburb' => 'Sydney',
            'postcode' => '2000',
            'streetType' => 'Street',
            'unitNumber' => '918',
            'streetNumber' => '348-354',
            'streetName' => 'Sussex',
        ], $result);
    }

    
}
