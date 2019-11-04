<?php  

	if($_POST){
		$nro = $_POST["nro"];
		$palavra = $_POST["palavra"];
		for($i = 0; $i < $nro; $i++){
			if($i != $nro){
				echo $palavra . '<br>';
			}
		}
	}
    
?>