<?php

  $a = 5;
  $b = 5;
  $b2 = "5";
  $c = 9;
  $d = 2;

  // == Igual
  echo "= = Igual <br>";
  var_dump($a == $b);
  var_dump($a == $b2);

  echo "<hr>";

  // === Identico
  echo "= = = Identico <br>";
  var_dump($a === $b);
  var_dump($a === $b2);


  echo "<hr>";

  // != Diferente
  echo "!= Diferente <br>";
  var_dump($a != $b2);
  var_dump($a !== $b2);

  echo "<hr>";

  // < Menor que
  echo "< Menor que <br>";
  var_dump($a < $b);
  var_dump($c < $b);
  var_dump($d < $b);

  echo "<hr>";

  // > Mayor que
  echo "> Mayor que <br>";
  var_dump($a > $b);
  var_dump($c > $b);
  var_dump($d > $b);

  echo "<hr>";

  // >= Mayor o igual que
  echo ">= Mayor o igual que <br>";
  var_dump($a >= $b);
  var_dump($c >= $b);
  var_dump($d >= $b);

  echo "<hr>";

  // <= Menor o igual que
  echo "<= Menor o igual que <br>";
  var_dump($a <= $b);
  var_dump($c <= $b);
  var_dump($d <= $b);

  echo "<hr>";

  // ?? Fusión de Null

  $edad_de_pepito = 23;

  echo $edad_de_juanito ?? $edad_de_pepito;

  echo "<hr>";

  $variable = (bool) "";

  echo "este es $variable";
  var_dump($variable);
  echo 5 + "5 michis";
  echo "<hr>";


  $los_michis_duermen = true;
$los_michis_vuelan = false;

var_dump($los_michis_duermen || $los_michis_vuelan);

?>