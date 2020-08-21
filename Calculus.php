<?php

require_once "Operation.php";

class Calculus extends Operation
{
    public $num1;
    public $num2;
    public $operator;

    public function __construct($string)
    {
        $values = $this->handleValues($string);
        $this->num1 = $values[0];
        $this->num2 = $values[1];
        $this->operator = $this->handleOperator($string);
    }

    private function handleValues($input)
    {
        $arr = preg_split("/[*\/+\-]/", $input);
        $values = [];

        foreach ($arr as $val) {
            if (preg_match("/[0-9]/", $val)) {
                array_push($values, $val);
            }
        }
        return $values;
    }

    private function handleOperator($arr)
    {
        $arr = str_split($arr);
        $ops = [];

        foreach ($arr as $val) {
            if (preg_match("/[*\/+\-]/", $val)) {
                array_push($ops, $val);
            }
        }
        return $ops[0];
    }

    public function getResult()
    {
        return $this->handleOperation();
    }
}
