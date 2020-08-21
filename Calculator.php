<?php

class Calculator
{
    public $output;
    public $calculus;

    public function __construct($calculus)
    {
        $this->calculus = $calculus;
    }

    public function showResults()
    {
        return $this->calculus->getResult();
    }
}