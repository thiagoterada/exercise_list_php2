<?php  

	if($_POST){
		$massa = $_POST["mat_massa"];
		$porcent = $_POST["porcent_perda"];
		$tempo = $_POST["tempo_perda"];
		if($massa < 0.10){
			echo 'Digite um valor superior a 0.10!';
		}
		else{
			if($porcent <= 0){
				echo 'Digite uma porcentagem válida';
				return;
			}
			if($tempo <= 0){
				echo 'Digite um tempo válido';
				return;
			}
			$tempo_tot = 0;
			$perda_massa = ($massa * $porcent) / 100;
			$tempo_min = $tempo / 60;
			while($massa >= 0.10){
				$massa -= $perda_massa;
				$tempo_tot = $tempo_tot + $tempo_min;
			}
			echo 'Será necessário ' . $tempo_tot . ' minuto(s) para que a massa seja menor que 0.10!';
		}
	}
    
?>