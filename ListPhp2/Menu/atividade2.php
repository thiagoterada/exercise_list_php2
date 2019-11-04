<?php  

    $vlr1 = $_POST["vlr1"];
    $divi10 = $vlr1 % 10;
    $divi5 = $vlr1 % 5;
    $divi2 = $vlr1 % 2;

    if($divi10 == 0){
        echo 'Número divisível por 10 <br>';
    }

    if($divi5 == 0){
        echo 'Número divisível por 5 <br>';
    }

    if($divi2 == 0){
        echo 'Número divisível por 2 <br>';
    }

    else {
        echo 'O número não é divisível nem por 10, nem por 5 e nem por 2';
    }

?>