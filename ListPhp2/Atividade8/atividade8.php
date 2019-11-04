<?php  

	if($_POST){
		$nro = $_POST["nro"];
		$produto = 1;
		for($i = 1; $i <= $nro; $i++){
			$produto = $produto * $i;
			if($i != $nro){
				echo $i . ' | ';
			}
			else{
				echo $i . '<br>';
			}
		}
		echo 'Produto = ' . $produto;
	}
    
?>