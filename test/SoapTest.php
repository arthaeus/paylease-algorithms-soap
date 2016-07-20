<?php

require __DIR__.'/../vendor/autoload.php';
use Algorithm\Rpn as Rpn;

class RpnTest extends PHPUnit_Framework_TestCase
{

    public function testAddition()
    {

        $expression1 = new stdClass();
        $expression1->expression = "3 11 +"; //14
       
        $rpn = new Algorithm\Soap();
        $client = new \nusoap_client('http://soaptest.parasoft.com/calculator.wsdl', true);
        $response = $client->call('add', array('x'=>'1', 'y'=>'2'));
        $result = $response['Result'];
        $this->assertEquals(3,$result);
    }
}
