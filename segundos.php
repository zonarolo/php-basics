<?php
  $horas = readline("Ingrese la cantidad de horas: ");
  $minutos = readline("Ingrese la cantidad de minutos: ");
  $segundos = readline("Ingrese la cantidad de segundos: ");

  $totalSegundos = (int) (($horas*3600) + ($minutos*60) + $segundos);

  echo "La suma total de segundos con los datos ingresados es: $totalSegundos \n";

?>