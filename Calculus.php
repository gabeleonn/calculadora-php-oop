<?php

require_once "Operation.php";

class Calculus extends Operation
{
    public $num1;
    public $num2;
    public $operator;
    public $result;

    public function __construct($string)
    {
        $values = $this->handleValues($string);
        $this->num1 = $values[0];
        $this->num2 = $values[1];
        $this->operator = $this->handleOperator($string);
    }

    private function handleValues($input)
    {
        return preg_split("/[*\/+\-]/", $input);
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
        $this->setResult();
        return $this->result;
    }

    private function setResult()
    {
        $this->result = $this->handleOperation();
    }
}
