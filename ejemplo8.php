<?php
/**
 * Estructuras repetitivas
 * * Operadores de incremento y decremento
 *  ++$variable     incrementa el valor de la variable en uno antes de evaluar la variable
 *  $variable++     incrementa el valor de la variable en uno, evalua y luego incrementa
 *  --$variable     disminuye el valor de la variable en uno antes de evaluar la variable
 *  $variable--     disminuye el valor de la variable en uno, evalua y luego incrementa
 * * Operadores complejos
 *  +=      un operador de aumento y acumulacion
 *  -=      un operador de disminucion y acumulacion
 *  *=      un operador que acumula valores en productos
 *  /=      un operador que acumula divisiones
 * * Contadores
 *  $contador = $contador + 1; // $contador++
 * * Acumuladores
 *  $acumulador = $acumulador + $valor; // $acumulador += $valor
 * 
 * ESTRUCTURA REPETITIVA WHILE
 * 
 * while(condicion){
 *  instruciones a repetir;
 * }
 * 
 */

    $i = 10;
    while ($i >= 1) {
        echo $i."<br>";
        $i--;
    }

    //Listar los N primeros pares

    //Listar los N primeros elementos de la siguiente serie: 1/2, 3/4, 5/6,..N


?>