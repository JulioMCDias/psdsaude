<?php 
require '../../config.php';
require '../../classes/pacientes.class.php';
$paciente = new Pacientes();

if (!empty($_POST['id_paciente'])) {
		$id_paciente = $_POST['id_paciente'];
		$nome_paciente = $_POST['nome_paciente'];
		$idade = $_POST['idade'];		
		$num_carteira = $_POST['num_carteira'];		
		$data_nasc = $_POST['data_nasc'];

		$paciente->editarPaciente($id_paciente, $nome_paciente, $idade, $num_carteira, $data_nasc);
		header("Location: ../../pacientes.php");
	}


 ?>