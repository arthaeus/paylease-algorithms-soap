<?php

namespace Algorithm;

class Soap implements IAlgorithm
{

    public function calculate( \stdClass $object )
    {
        $x = $object->x;
        $y = $object->y;
        $rpn = new Algorithm\Soap();
        $client = new \nusoap_client('http://soaptest.parasoft.com/calculator.wsdl', true);
        $response = $client->call('add', array('x'=>$x, 'y'=>$y));
        $result = $response['Result'];
        return $result;
    }
}
