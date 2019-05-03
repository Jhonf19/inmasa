<?php
class Imc
{


  function calcular($peso, $altura)
  {
    $R =$peso / (($altura*$altura));
    if ($R < 19) {
      $m="Bajo Peso";
      return $m;
    }elseif ($R <= 25) {
      $m='Peso Normal';
      return $m;
    }elseif ($R <= 30) {
      $m='Sobrepeso';
      return $m;
    }elseif ($R <= 35) {
      $m='Obesidad Grado 1';
      return $m;
    }elseif ($R <= 40) {
      $m='Obesidad Grado 2';
      return $m;
    }elseif ($R > 40) {
      $m='Obesidad Grado 3';
      return $m;
    }

  }
}
 ?>
