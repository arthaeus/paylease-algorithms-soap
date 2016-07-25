<?php

namespace Algorithm;

require __DIR__.'/../../vendor/autoload.php';
use \Algorithm\IAlgorithm as IAlgorithm;

class SoapMath implements IAlgorithm
{

    public function calculate( \stdClass $object )
    {
        $x = $object->x;
        $y = $object->y;

        $param1 = 'x';
        $param2 = 'y';

        $operation = null;
        switch( $object->operation )
        {
            case '+':
                $operation = 'add';
                break;
            case '-':
                $operation = 'subtract';
                break;
            case '*':
                $operation = 'multiply';
                break;
            case '/':
                $operation = 'divide';
                $param1 = 'numerator';
                $param2 = 'denominator';
                break;
        }

        $client = new \nusoap_client('http://soaptest.parasoft.com/calculator.wsdl', true);
        $response = $client->call($operation, array($param1=>$x, $param2=>$y));
        $result = $response['Result'];
        return $result;
    }
}
