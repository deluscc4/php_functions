<?php
    require_once "biblioteca.php";
    $salario = 1000;
    $aumento = 70;
    $novo_salario = ajusta_salario($salario, $aumento); 
    echo $novo_salario;
?>