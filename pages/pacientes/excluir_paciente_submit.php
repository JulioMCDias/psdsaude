<?php 
require '../../config.php';
require '../../classes/pacientes.class.php';
$paciente = new Pacientes();

if (!empty($_POST['id_paciente'])) {
		$id_paciente = $_POST['id_paciente'];
		$paciente->excluirPaciente($id_paciente);
		header("Location: ../../pacientes.php");
}

?>


