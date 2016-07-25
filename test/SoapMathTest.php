<?php

require __DIR__.'/../vendor/autoload.php';
use Algorithm\SoapMath as SoapMath;

class SoapMathTest extends PHPUnit_Framework_TestCase
{

    public function testSoapAdd()
    {
        $soapMath = new Algorithm\SoapMath();
        $mathProblem = new \stdClass();
        $mathProblem->x = 5;
        $mathProblem->y = 5;
        $mathProblem->operation = '+';

        $result = $soapMath->calculate( $mathProblem );
        $this->assertEquals(10,$result);
    }
    public function testSoapSubtract()
    {
        $soapMath = new Algorithm\SoapMath();
        $mathProblem = new \stdClass();
        $mathProblem->x = 5;
        $mathProblem->y = 5;
        $mathProblem->operation = '-';

        $result = $soapMath->calculate( $mathProblem );
        $this->assertEquals(0,$result);
    }
    public function testSoapMultiply()
    {
        $soapMath = new Algorithm\SoapMath();
        $mathProblem = new \stdClass();
        $mathProblem->x = 5;
        $mathProblem->y = 5;
        $mathProblem->operation = '*';

        $result = $soapMath->calculate( $mathProblem );
        $this->assertEquals(25,$result);
    }
    public function testSoapDivide()
    {
        $soapMath = new Algorithm\SoapMath();
        $mathProblem = new \stdClass();
        $mathProblem->x = 25;
        $mathProblem->y = 5;
        $mathProblem->operation = '/';

        $result = $soapMath->calculate( $mathProblem );
        $this->assertEquals(5,$result);
    }

}
