<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
 $peso = $_POST['peso'];
 $altura = $_POST['altura']/100;
 $R =$peso / (($altura*$altura));
 // echo $R;
 if ($R < 19) {
   header("location:index.php?imc=1");
 }elseif ($R <= 25) {
   header("location:index.php?imc=2");
 }elseif ($R <= 30) {
   header("location:index.php?imc=3");
 }elseif ($R <= 35) {
   header("location:index.php?imc=4");
 }elseif ($R <= 40) {
   header("location:index.php?imc=5");
 }elseif ($R > 40) {
   header("location:index.php?imc=6");
}

?>
