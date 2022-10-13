<?php
  // Operadores Aritmeticos

  /**
   * Operadores Aritméticos

    Adición ⇒ +
    Sustracción ⇒ -
    Multiplicación ⇒ *
    División ⇒ /
    Modulo ⇒ % ⇒ Se usa para conocer el residuo de una división ⇒ $a % $b
    Potenciación ⇒ ** ⇒ $a ** $b
    Identidad ⇒ Sirve para convertir un string a un int o float, según sea el caso ⇒ + ⇒ +$a
    Negación ⇒ Convierte un numero positivo a negativo ⇒ -$a

   */

  $resultado = 5 ** 3;

  echo $resultado ;

  echo "<br>";


  $numeroCalcular = 7501;
  $hora = 3600;
  $minuto = 60;

  $operacionHoras = $numeroCalcular / $hora;
  $operacionModulo = $numeroCalcular % $hora;

  echo "$numeroCalcular seg convertidos a horas son: $operacionHoras horas y sobran $operacionModulo segundos.";

  echo "<br>";

?>