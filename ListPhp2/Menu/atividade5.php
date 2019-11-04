<?php  

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];  

    if($a == $b && $a == $c && $b == $c){
        echo 'Esse triângulo é Equilátero!';
    } else if($a != $b && $a != $c && $b != $c){
        echo 'Esse triângulo é Escaleno!';
    } else{
		echo 'Esse triângulo é Isósceles!';
	}
	


?>