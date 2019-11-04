<?php  

	if($_POST){
		$inicio = $_POST["inicio"];
		$fim = $_POST["fim"];
		if($inicio == $fim){
			echo 'Não há números inermediários entre números iguais!';
		} else if($inicio < $fim){
			if(($inicio + 1) != $fim){
				for($i = ($inicio + 1); $i < $fim; $i++){
					if($i == ($fim - 1)){
						echo $i;
					} else {
						echo $i . ' | ';
					}
				}
			} else{
				echo 'Não há números intermediários!';
			}	
		}
		else if ($fim < $inicio){
			echo 'Valor final não pode ser maior que o inicial!';
		}
		
	}
    
?>