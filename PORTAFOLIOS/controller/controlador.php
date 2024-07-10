<?php
    $valorR =  $_GET['valor'];
    if($valorR == 1){
           include("../view/visualizar.php");
     }else{
        echo "Hubo un error inesperado.";
     }
?>