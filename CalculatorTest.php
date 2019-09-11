<?php
include "Calculator.php";

class CalculatorTest extends Calculator
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = ADDITION;



        $calculator = new Calculator();
        return $result = $calculator->calculate($firstOperand, $secondOperand, $operator);

    }



}


echo CalculatorTest::testCalculateAdd();