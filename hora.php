<?php
  $segundos = readline("Ingresa el tiempo en seg a convertir: ");

  $horas = (int) ($segundos/3600);
  $segundos = (int) ($segundos % 3600);
  $minutos = (int) ($segundos / 60);
  $segundos = (int) ($segundos % 60);


  echo "Son $horas horas, $minutos minutos, $segundos segundos.";

  echo "\n";
?>