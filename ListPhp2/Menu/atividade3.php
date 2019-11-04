<?php  

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $idade = $_POST["idade"];  

    if($sexo == "F" && $idade < 25){
        echo $nome . ': ACEITA';
    }
    else{
        echo $nome . ': NÃO ACEITA';
    }

?>