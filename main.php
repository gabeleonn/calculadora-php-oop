<?php 

require_once 'Calculator.php';
require_once 'Calculus.php';


echo "#============================#\n";
echo "          Bem Vindo           \n";
echo "     Exemplo de uso: 1+2      \n";
echo "#============================#\n";
$input = readline("Digite a operação: ");

$calculus = new Calculus($input);
$calculator = new Calculator($calculus);

$result = $calculator->showResults();
echo "#============================#\n";
echo "\n";
echo "O resultado de $input é $result\n";
echo "\n";
echo "#============================#\n";
