
<?php
function imprimirArray($array){
    if(is_array($array)){
       foreach($array as $n){
           echo $n.", ";
       }
    }else{
        echo "no es un array";
    }
}
function imprimirArrayMayus($array){
    if(is_array($array)){
       foreach($array as $n){
           echo strtoupper($n).", ";
       }
    }else{
        echo "no es un array";
    }
}
function imprimirArrayMinus($array){
    if(is_array($array)){
       foreach($array as $n){
           echo strtolower($n).", ";
       }
    }else{
        echo "no es un array";
    }
}

function reverseArray($array){
    if(is_array($array)){
       $nuevoArray = [];
       for($i=0;$i<count($array);$i++){
           array_push($nuevoArray, $array[$i]);
       }
       return $nuevoArray;
    }else{
        echo "no es un array";
    }
}
?>