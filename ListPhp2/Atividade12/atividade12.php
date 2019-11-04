<?php  

	if($_POST){
		$nm1 = $_POST["nome_1"];
		$alt1 = $_POST["altura_1"];
		$cresc1 = $_POST["cresc_1"];
		$nm2 = $_POST["nome_2"];
		$alt2 = $_POST["altura_2"];
		$cresc2 = $_POST["cresc_2"];
		$anos = 0;
		$cresc1 = $cresc1 / 100;
		$cresc2 = $cresc2 / 100;
		if($alt1 > $alt2){
			if($cresc1 > $cresc2 || $cresc1 == $cresc2){
				echo $nm2 . ' não conseguirá alcançar ' . $nm1 . ' em altura!';
			}
			if($cresc2 > $cresc1){
				do{
					$anos++;
					$alt1 += $cresc1;
					$alt2 += $cresc2;
				} while ($alt1 >= $alt2);
				
				echo $nm2 . ' irá demorar ' . $anos . ' ano(s) para ser mais alto que ' . $nm1 . '!';
			}
		} else if($alt2 > $alt1){
			if($cresc2 > $cresc1 || $cresc1 == $cresc2){
				echo $nm1 . ' não conseguirá alcançar ' . $nm2 . ' em altura!';
			}
			if($cresc1 > $cresc2){
				do{
					$anos++;
					$alt1 += $cresc1;
					$alt2 += $cresc2;
				} while ($alt2 >= $alt1);
				
				echo $nm1 . ' irá demorar ' . $anos . ' ano(s) para ser mais alto que ' . $nm2 . '!';
			}
		} else if($alt1 == $alt2){
			if($cresc1 > $cresc2){
				echo $nm1 . ' irá demorar 1 ano para ser mais alto que ' . $nm2 . '!';
			} else if($cresc1 < $cresc2){
				echo $nm2 . ' irá demorar 1 ano para ser mais alto que ' . $nm1 . '!';
			} else if ($cresc1 == $cresc2){
				echo $nm2 . ' e ' . $nm1 . ' ficarão sempre com a mesma altura!';
			}
		}
	}
    
?>