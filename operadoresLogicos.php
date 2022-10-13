<?php
  // operadores logicos
  // > < >= <= <> != ==

  /**
   * Operadores Lógicos

    Son los operadores que nos ayudan a combinar dos o mas afirmaciones para definir si una oración es cierta o falsa. Su uso esta basado en tablas de verdad.
    AND (y)

    Se usa para verificar si dos afirmaciones son ciertas, entonces la oración completa es cierta. Si una de ellas es falsa, entonces, la oración completa es falsa.

    true AND true = True

    false AND true = False

    true AND false = False

    false AND false = False

    Se escribe así:

        $valor_1 and $valor_2
        $valor_1 && $valor_2

    OR (o)

    Si una de las 2 afirmaciones es cierta, entonces la oración completa es cierta. Si solo una de ellas es falsa, entonces, la oración completa es cierta.

    true OR true = True

    false OR true = True

    true OR false = True

    false OR false = False

    Se escribe así:

        $valor_1 or $valor_2
        $valor_1 || $valor_2

    NOT (no)

    Se usa para invertir el significado de una oración

    NOT True ⇒ False

    NOT False ⇒ True
   */

  $a = 1;
  $b = 2;

  if ($a > $b) {
    echo "Verdadero";
  } else {
    echo "falso";
  }

  echo "<br>";


  $michis_felinos = true;
  $michis_4_patas = true;
  $michis_vuelan = false;
  $michis_programan_con_PHP = false;

  // And

  var_dump($michis_felinos && $michis_4_patas); // true

  echo "<br>";

  // Or
  var_dump($michis_vuelan || $michis_4_patas); // true

  echo "<br>";

  //Reto platzi
  echo "<h3>Reto platzi</h3>";

  $es_un_michi_grande = true;
  $le_gusta_comer = true;
  $sabe_volar = false;
  $tiene_2_patas = false;

  // Cual es el resultado??
  var_dump($es_un_michi_grande && $le_gusta_comer); //? true
  echo "<br>";
  var_dump($es_un_michi_grande || $sabe_volar); //? true
  echo "<br>";
  var_dump($sabe_volar || $tiene_2_patas); //! false
  echo "<br>";
  var_dump(!$le_gusta_comer); //! false
  echo "<br>";
  var_dump(!$le_gusta_comer || $es_un_michi_grande); //? true
  echo "<br>";





?>