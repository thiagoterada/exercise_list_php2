<?php  

	if($_POST){
		$valor = $_POST["valor"];
		for($i = 0; $i <= $valor; $i++){
			if($i == $valor){
				echo $i;
			} else{
				echo $i . ' | ';
			}
		}
	}
    
?>