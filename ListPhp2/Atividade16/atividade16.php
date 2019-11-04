<?php  

	if($_POST){
		$valor = $_POST["valor"];
		$fatorial = 1;
		for($i = 1; $i <= $valor; $i++){
			$fatorial = $fatorial * $i; 
		}
		echo 'Fatorial do número = ' . $fatorial;
	}
    
?>