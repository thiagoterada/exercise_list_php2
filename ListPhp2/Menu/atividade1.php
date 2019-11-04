<?php  
    $vlr1 = $_POST["vlr1"];
    $vlr2 = $_POST["vlr2"];
    $soma = $vlr1 + $vlr2;
    if($soma > 20){
        $soma += 8;
    }
    if($soma <= 20){
        $soma -= 5;
    }
    echo 'O resultado é ' . $soma;
?>