<?php
class Operation
{

  public function handleOperation()
  {
    $operator = trim($this->operator);
    $num1 = trim($this->num1);
    $num2 = trim($this->num2);

    switch ($operator) {
      case '+':
        return $this->sum($num1, $num2);
      case '-':
        return $this->subtraction($num1, $num2);
      case '/':
        return $this->division($num1, $num2);
      case '*':
        return $this->multiplication($num1, $num2);
      default:
        # mostrar erro
        break;
    }
  }

  private function sum($num1, $num2)
  {
    return $num1 + $num2;
  }

  private function subtraction($num1, $num2)
  {
    return $num1 - $num2;
  } 

  private function division($num1, $num2)
  {
    //fazer validações
    return $num1 / $num2;
  } 

  private function multiplication($num1, $num2)
  {
    return $num1 * $num2;
  }
}