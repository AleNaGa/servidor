<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../php2/metodos.php")?>
    <!-- ejercicio 1-->
    <p>Ejercicio 1</p>
     <form action="ejercicio2.php" method="GET">
        <input type="number" name="edad">
     </form>
    <?php $arrayNums = [3,7,11,8,1,4]; ?>
       
        <?php foreach($arrayNums as $num):?>
        <p><?= $num*$_GET["edad"] ?></p>
        <? endforeach; ?>

       <?php for($i=0;$i<count($arrayNums);$i++){
        $arrayNums[$i] = $arrayNums[$i]*2;
       }?>
       <p><?php imprimirArray($arrayNums)?></p>

    <!-- ejercicio 2 -->
     <p>Ejercicio 2</p>
     <?php 

     //1
     $nombres = "Juan,Alberto,Marcelo,Pablo,Maria";
     $arrayNombres = explode(",", $nombres);
     imprimirArray($arrayNombres);
     ?>
     <p><?php
     //2
     foreach($arrayNombres as $n){
         echo $n;
        echo stripos($n, "a").", ";
     }
    ?></p>
     <br/>
     <?php
     //3
         $arrayNombres= str_replace("a","e",$arrayNombres);
        imprimirArray($arrayNombres);
     ?>
     <br/>
     <?php
      //4
      //no me funciona
      $arrayNombres = reverseArray($arrayNombres);
      imprimirArray($arrayNombres);
      $arrayNombres=array_reverse($arrayNombres);
      imprimirArray($arrayNombres);
     ?>

     <br/>
     <?php
     //5
      imprimirArrayMayus($arrayNombres);     ?>
      <br/>
      <?php
      imprimirArrayMinus($arrayNombres);?>

<!--EJERCICIO 3-->
<p>Ejercicio 3</p>
<br/>
<br/>
<?php 
//1
   $array100 = [];
   for($i=1;$i<=100;$i++){
      array_push($array100, $i);
   }
   imprimirArray($array100);
   $sum= 0;
   foreach($array100 as $n){
      $sum += $n;
   }
   echo "suma: ".$sum.", ";
   echo "media: " . $sum/count($array100);   
?>
<br/>
<form action="ejercicio2.php" method="GET">
    <input type="number" name="tamanio" placeholder="tamanio">
 </form>
 <?php
 //2
 if(isset($_GET["tamanio"])){
    
 
   $arrayRand = [];
   for($i=0;$i<$_GET["tamanio"];$i++){
      array_push($arrayRand, rand(0,9));
   }
   imprimirArray($arrayRand);
   $sum= 0;
   foreach($arrayRand as $n){
      $sum += $n;
   }
   echo "suma: ".$sum;
}?>
<br/>
<form action="ejercicio2.php" method="GET">
    <input type="number" name="entero" placeholder="numero entero">
</form>
<br/>
<?php
if(isset($_GET["entero"])){
//3
   $arrayRand = [];
   for($i=0;$i<$_GET["entero"];$i++){
      array_push($arrayRand, rand(0,300));
   }
   imprimirArray($arrayRand);
}?>
<br/>
<form action="ejercicio2.php" method="GET">
   <input type="number" name="0a9" placeholder="un numero de 0 a 9">
</form>
<?php
if(isset($_GET["0a9"])){
$nuevoArray = [];
foreach($arrayRand as $n){
   if($n%10==$_GET["0a9"]){
      echo $arrayRand[$n];
      array_push($nuevoArray,$n);
   }
}
imprimirArray($nuevoArray);
}?>
<br/>
<form action="ejercicio2.php" method="GET">
   <input type="number" name="DNI" placeholder="tu dni">
<?php
//4 calcular la letra del dni
   $letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
   $letra = $letras[$_GET["DNI"]%23];
   echo $_GET["DNI"].$letra;
?>

<!-- ejercicio 5 -->
 <p>Ejercicio 5</p>
 <br/>
 <?php
 //1
   function esPrimo($n){
      if($n==1||$n==0)return false;
      for($i=2;$i<$n/2;$i++){
         if($n/$i==0){
            return false;
         }
         else{
            return true;
         }
      }
   }
   $arrayPrim1=[5,1,7,8,2,4,6,3,9];
   foreach($arrayPrim1 as $n){
      if(esPrimo($n)){
         echo"hay un primo: " .  $n.". ";
         break;
      }
   }
 ?>
 <br/>
 <?php
 //2
   foreach($arrayPrim1 as $n){
      if(!esPrimo($n)){
         echo "No todos son primos!";
         break;
      }
   }
?>
<br/>
<?php
//3
foreach($arrayPrim1 as $n){
   if(esPrimo($n)){
      echo"El primer primo está en la posición : " .  $arrayPrim1[$n].". ";
      break;
   }
}
?>
<!-- FALTAN PALINDRMOS-->
</body>
</html>