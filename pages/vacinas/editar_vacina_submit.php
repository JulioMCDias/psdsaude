<?php 
require '../../config.php';
require '../../classes/vacinas.class.php';
$vacina = new Vacinas();

if (!empty($_POST['id_vacina'])) {
		$id_vacina = $_POST['id_vacina'];
		$nome_vacina = $_POST['nome_vacina'];
		$descricao = $_POST['descricao'];		
		
		$vacina->editarVacina($id_vacina, $nome_vacina, $descricao);
		header("Location: ../../vacinas.php");
	}


 ?>