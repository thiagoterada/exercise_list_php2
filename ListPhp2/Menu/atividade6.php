<?php  

	if($_POST){
		$nro = $_POST["nro"];
		switch($nro){
			case 1:
				echo 'O número ' . $nro . ' equivale ao mês de Janeiro!';
				break;
			case 2:
				echo 'O número ' . $nro . ' equivale ao mês de Fevereiro!';
				break;
			case 3:
				echo 'O número ' . $nro . ' equivale ao mês de Março!';
				break;
			case 4:
				echo 'O número ' . $nro . ' equivale ao mês de Abril!';
				break;
			case 5:
				echo 'O número ' . $nro . ' equivale ao mês de Maio!';
				break;
			case 6:
				echo 'O número ' . $nro . ' equivale ao mês de Junho!';
				break;
			case 7:
				echo 'O número ' . $nro . ' equivale ao mês de Julho!';
				break;
			case 8:
				echo 'O número ' . $nro . ' equivale ao mês de Agosto!';
				break;
			case 9:
				echo 'O número ' . $nro . ' equivale ao mês de Setembro!';
				break;
			case 10:
				echo 'O número ' . $nro . ' equivale ao mês de Outubro!';
				break;
			case 11:
				echo 'O número ' . $nro . ' equivale ao mês de Novembro!';
				break;
			case 12:
				echo 'O número ' . $nro . ' equivale ao mês de Dezembro!';
				break;
			default:
				echo 'O número ' . $nro . ' não equivale à nenhum mês!';
				break;
		}
	}
    
?>