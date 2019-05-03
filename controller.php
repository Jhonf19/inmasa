<?php
require ('Operations.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
/**
 *
 */
 $peso = $_POST['peso'];
 $altura = $_POST['altura']/100;
 $im = new Imc;
 $m = $im->calcular($peso, $altura);
 header("location:index.php?m=$m");
?>
