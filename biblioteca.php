<?php
    function ajusta_salario($salario, $aumento) {
        return ($salario / 100 * $aumento) + $salario;
    }
?>