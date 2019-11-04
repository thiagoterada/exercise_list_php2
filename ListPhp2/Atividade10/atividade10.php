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
		$v[] = $_POST["v11"];
		$v[] = $_POST["v12"];
		$v[] = $_POST["v13"];
		$v[] = $_POST["v14"];
		$v[] = $_POST["v15"];
		$v[] = $_POST["v16"];
		$v[] = $_POST["v17"];
		$v[] = $_POST["v18"];
		$v[] = $_POST["v19"];
		$v[] = $_POST["v20"];
		$soma = 0;
		$count = 0;
		for($i = 0; $i < 20; $i++){
			if($v[$i] > 0){
				$soma = $soma + $v[$i];
			}
			if($v[$i] < 0){
				$count++;
			}
		}
		echo 'Soma dos valores positivos = ' . $soma . '<br>';
		echo 'Total de números negativos = ' . $count . '<br>';
	}
    
?>