<?php  

	if($_POST){
		$v[] = $_POST["v1"];
		$v[] = $_POST["v2"];
		$v[] = $_POST["v3"];
		$v[] = $_POST["v4"];
		$v[] = $_POST["v5"];
		$v[] = $_POST["v6"];
		$v[] = $_POST["v7"];
		$v[] = $_POST["v8"];
		$v[] = $_POST["v9"];
		$v[] = $_POST["v10"];
		$cont = 0;
		for($i = 0; $i < 10; $i++){
			if($v[$i] == 0){
				break;
			}
			if($v[$i] >= 100 && $v[$i] <= 200){
				$cont++;
			}
			if($i != 9){
				echo $v[$i] . ' | ';
			}
			else{
				echo $v[$i];
			}
		}
		echo '<br> Quantidade de números digitados entre 100 e 200 = ' . $cont . '<br>';
	}
    
?>