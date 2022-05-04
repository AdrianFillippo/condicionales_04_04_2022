<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));

    //if($_DATA->num > 5){
       //print_r("El numero $_DATA->num es mayor a 5");
    //}else{
        //print_r("El numero $_DATA->num no cumple la condicion");
    //}
    ($_DATA->num > 5)
        ? (print_r("El numero $_DATA->num es mayor a 5"))
        : (print_r("El numero $_DATA->num no cumple la condicion"));
    
?>