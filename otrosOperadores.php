<?php
  // Operador de asignacion
  $edad_de_jaimito = 18;
/*
  Otros operadores
Operador 	Descripción
= 	Asignación
+= 	Incremento
++ 	Incremento
-= 	Decremento
-- 	Decremento
*= 	Multiplicación
/= 	División
.= 	Concatenación

El operador de Asignación, representado por el signo =, se usa para indicar al intérprete que un determinado identificador deberá apuntar a un valor en memoria.
*/
$estatura = 1.65;
$talla = "XS";
$instrumento = "Bambuco";

//El operador de Incremento, representado por la secuencia +=, se usa para simplificar la asignación de una adición sobre la misma variable.

$index = 0;
$index += 10;  // Equivale a la sentencia '$index = $index + 10;'

//El operador de Incremento unitario, representado por la secuencia ++, se usa para simplificar la asignación de una adición unitaria sobre la misma variable. Sin embargo, si el operador se encuentra a la izquierda de la variable, se considera Pre-incremento (Incrementa en uno, y luego retorna el valor); y si el operador se encuentra a la derecha de la variable, se considera Post-incremento (Retorna el valor, y luego lo incrementa en uno).

$length = 6;
$length++;  // Equivale a la sentencia '$length = $length + 1;'

//El operador de Decremento, representado por la secuencia -=, se usa para simplificar la asignación de una sustracción sobre la misma variable.

$juegos = 335;
$juegos -= 20;  // Equivale a la sentencia '$juegos = $juegos - 20;'

//El operador de Decremento unitario, representado por la secuencia --, se usa para simplificar la asignación de una sustracción unitaria sobre la misma variable. Sin embargo, si el operador se encuentra a la izquierda de la variable, se considera Pre-decremento (Reduce en uno, y luego retorna el valor); y si el operador se encuentra a la derecha de la variable, se considera Post-decremento (Retorna el valor, y luego lo reduce en uno).

$peces = 15;
$peces--;  // Equivale a la sentencia '$peces = $peces - 1;'

//El operador de Multiplicación, representado por la secuencia *=, se usa para simplificar la asignación de una multiplicación sobre la misma variable.

$casas = 3;
$casas *= 3;  // Equivale a la sentencia '$casas = $casas * 3;'

//El operador de División, representado por la secuencia /=, se usa para simplificar la asignación de una división sobre la misma variable.

$cupcakes = 25;
$cupcakes /= 5;  // Equivale a la sentencia '$cupcakes = $cupcakes / 5;'

//El operador de Concatenación, representado por la secuencia .=, se usa para simplificar la asignación de una concatenación sobre la misma variable.

$nombre = "Blanca";
$nombre .= " Nieves";  // Equivale a la sentencia '$nombre = $nombre . " Nieves";'

?>