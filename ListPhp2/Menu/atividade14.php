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
		$cont = 0;
		for($i = 0; $i < 15; $i++){
			if($v[$i] % 2 == 0){
				echo $v[$i] . ' é par! <br>';
			} else{
				echo $v[$i] . ' é ímpar! <br>';
			}
		}
	}
    
?>