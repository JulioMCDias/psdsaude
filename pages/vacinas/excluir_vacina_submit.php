<?php 
require '../../config.php';
require '../../classes/vacinas.class.php';
$vacina = new Vacinas();

if (!empty($_POST['id_vacina'])) {
		$id_vacina = $_POST['id_vacina'];
		$vacina->excluirVacina($id_vacina);
		header("Location: ../../vacinas.php");
}

?>


