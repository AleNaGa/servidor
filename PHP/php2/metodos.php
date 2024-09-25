
<?php
function imrpimirArray($array){
    if(is_array($array)){
       foreach($array as $n){
           echo $n;
       }
    }else{
        echo "no es un array";
    }
}
?>