<?php  

    $vlr1 = $_POST["vlr1"];
    $vlr2 = $_POST["vlr2"];
    $vlr3 = $_POST["vlr3"];  

	if($vlr1 == $vlr2 && $vlr3 > $vlr1){
		echo $vlr3 . '>' . $vlr2 . '=' . $vlr1;
		return;
	}
	
	if($vlr1 == $vlr2 && $vlr3 < $vlr1){
		echo $vlr1 . '=' . $vlr2 . '>' . $vlr3;
		return;
	}
	
	if($vlr1 == $vlr3 && $vlr2 > $vlr1){
		echo $vlr2 . '>' . $vlr1 . '=' . $vlr3;
		return;
	}
	
	if($vlr1 == $vlr3 && $vlr2 < $vlr1){
		echo $vlr1 . '=' . $vlr3 . '>' . $vlr2;
		return;
	}
	
	if($vlr2 == $vlr3 && $vlr1 > $vlr2){
		echo $vlr1 . '>' . $vlr2 . '=' . $vlr3;
		return;
	}
	
	if($vlr2 == $vlr3 && $vlr1 < $vlr2){
		echo $vlr3 . '=' . $vlr2 . '>' . $vlr1;
		return;
	}
	
	if($vlr1 == $vlr2 && $vlr1 == $vlr3 && $vlr2 == $vlr3){
		echo $vlr1 . '=' . $vlr2 . '=' . $vlr3;
		return;
	}
	
    if($vlr1 > $vlr2 && $vlr1 > $vlr3){
        if($vlr2 > $vlr3){
            echo $vlr1 . '>' . $vlr2 . '>' . $vlr3;
			return;
        }
    }
    if($vlr1 > $vlr2 && $vlr1 > $vlr3){
        if($vlr3 > $vlr2){
            echo $vlr1 . '>' . $vlr3 . '>' . $vlr2;
			return;
        }
    } 
    if($vlr2 > $vlr1 && $vlr2 > $vlr3){
        if($vlr1 > $vlr3){
            echo $vlr2 . '>' . $vlr1 . '>' . $vlr3;
			return;
        }
    }
    if($vlr2 > $vlr1 && $vlr2 > $vlr3){
        if($vlr3 > $vlr1){
            echo $vlr2 . '>' . $vlr3 . '>' . $vlr1;
			return;
        }
    }
    if($vlr3 > $vlr1 && $vlr3 > $vlr2){
        if($vlr1 > $vlr2){
            echo $vlr3 . '>' . $vlr1 . '>' . $vlr2;
			return;
        }
    } 
    if($vlr3 > $vlr1 && $vlr3 > $vlr2){
        if($vlr2 > $vlr1){
            echo $vlr3 . '>' . $vlr2 . '>' . $vlr1;
			return;
        }
    }

?>