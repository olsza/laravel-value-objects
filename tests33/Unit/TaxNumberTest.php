<?php

namespace Olsza\ValueObjects\Tests\Unit;

use Olsza\ValueObjects\TaxNumber;
use Olsza\ValueObjects\Tests\TestCase;

class TaxNumberTest extends TestCase
{
}
//test('data in tax number is null and country is null', function () {
//    $data = new TaxNumber();
//    $this->assertEmpty($data->getCountry());
//    $this->assertEmpty($data->getTaxNumber());
//});
//
//test('data in tax number is number plus prefix country is null', function () {
//    $data = new TaxNumber('PL1234567890');
//    $this->assertEquals('PL', $data->getCountry());
//    $this->assertEquals('1234567890', $data->getTaxNumber());
//});
//
//test('data in tax number is number plus prefix country is null and prefix lowercase char', function () {
//    $data = new TaxNumber('pl1234567890');
//    $this->assertEquals('PL', $data->getCountry());
//    $this->assertEquals('1234567890', $data->getTaxNumber());
//});
//
//test('data in tax number is number not prefix country is null', function () {
//    $data = new TaxNumber('1234567890');
//    $this->assertEquals('12', $data->getCountry());
//    $this->assertEquals('34567890', $data->getTaxNumber());
//});
//
//test('data in tax number is number plus prefix country is ok', function () {
//    $data = new TaxNumber('PL1234567890', 'PL');
//    $this->assertEquals('PL', $data->getCountry());
//    $this->assertEquals('1234567890', $data->getTaxNumber());
//});
//
//test('data in tax number is number country is added', function () {
//    $data = new TaxNumber('1234567890', 'pL');
//    $this->assertEquals('PL', $data->getCountry());
//    $this->assertEquals('1234567890', $data->getTaxNumber());
//});
//
//test('data in tax number is number country is added another', function () {
//    $data = new TaxNumber('pL1234567890', 'aa');
//    $this->assertEquals('AA', $data->getCountry());
//    $this->assertEquals('PL1234567890', $data->getTaxNumber());
//});
//
//test('data in tax number is number country is added out full number vat', function () {
//    $data = new TaxNumber('1234567890', 'pL');
//    $this->assertEquals('PL1234567890', $data->getFullTaxNumber());
//});
//
//test('data in tax number is number country is added and special characters out full number vat', function () {
//    $data = new TaxNumber(' pl 123-456.78 90 ', 'pL');
//    $this->assertEquals('PL1234567890', $data->getFullTaxNumber());
//});
//
//test('data in tax number is number country is added another static', function () {
//    $data = TaxNumber::make('pL006888nHy', 'aZ');
//    $this->assertEquals('AZ', $data->getCountry());
//    $this->assertEquals('PL006888NHY', $data->getTaxNumber());
//});
//
//test('data in ta number is number country is added another method to string', function () {
//    $this->assertEquals('AZPL123ABC456', TaxNumber::make('pL123aBc456', 'aZ'));
//});
//
//test('short data in tax number is number and country', function () {
//    $this->assertEquals('A6', TaxNumber::make('6', 'a'));
//});
