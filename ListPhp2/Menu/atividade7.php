<?php  

	if($_POST){
		$tipo_usr = $_POST["tipo_usr"];
		$nm_livro = $_POST["nm_livro"];
		switch ($tipo_usr){
			case "aluno":
			echo 'Seu prazo de permanência com o livro ' . $nm_livro . ' é de 3 dias! <br>'; 
			break;
			
			case "prof":
			echo 'Seu prazo de permanência com o livro ' . $nm_livro . ' é de 10 dias! <br>'; 
			break;
			
			default:
			echo 'Escolha um tipo de usuário! <br>'; 
			break;
		}
	}
    
?>