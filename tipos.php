<?php
  // $numerito = 6546546;

  // var_dump($numerito);

  // $numero = 19.9;

  // $numero_text = "45";
  // $nuevo_numero = $numero_text + 5;

  // $papas = "tengo 20 papas";
  // $nuevas_papas = $papas + 5;
  // echo $nuevas_papas;

  // echo var_dump($nuevo_numero);
  // echo var_dump($numero);

  echo "<hr>";

  //Fácil

  $nombre = "Carlos"; //string
  $apellido = "Gómez"; //string
  $edad = 18; // integer
  $aprobado = true; // boolean

  //Medio

  $promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //float
  $nombre_completo = $nombre . " " . $apellido; //string
  $presento_examen = (bool) 1; // boolean

  //Avanzado

  $numero_preguntas = 5 + "5"; // integer
  $numero_respuestas = "5" + 5; // integer
  $promedio_maximo = $numero_respuestas / 1.0; // float
  $michis = 3 + "5 michis"; // integer con warning

  var_dump($promedio_maximo);
?>