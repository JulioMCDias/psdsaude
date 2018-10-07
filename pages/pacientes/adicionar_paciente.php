<?php
	require '../../config.php';
	require '../../classes/pacientes.class.php';
    $paciente = new Pacientes();

	if (!empty($_POST['nome_paciente'])) {
		$nome_paciente = $_POST['nome_paciente'];
		$idade = $_POST['idade'];
		$num_carteira = $_POST['num_carteira'];
		$data_nasc = $_POST['data_nasc'];

		$paciente->addPaciente($nome_paciente, $idade, $num_carteira, $data_nasc);
		header("Location: ../../pacientes.php");
	}
?>

<h3>Adicionar Paciente</h3><br>
<form method="POST" action="pages/pacientes/adicionar_paciente.php">
	<div class="form-row">
		<div class="form-group col-10">
		<label for="nome_paciente">Nome do paciente:</label>
		<input type="text" name="nome_paciente" class="form-control" required>
	</div>
	<div class="form-group col-4">
		<label for="idade">Idade:</label>
		<input type="text" name="idade" class="form-control" required>
	</div>
	</div>
	<div class="form-row">
		<div class="form-group col-6">
		<label for="num_carteira">Número da Carteira:</label>
		<input type="text" name="num_carteira" class="form-control" required>
	</div>
	<div class="form-group col-6">
		<label for="data_nasc">Data de Nascimento:</label>
		<input type="date" name="data_nasc" class="form-control" required>
	</div>
	</div>
	<input class="btn btn-primary" type="submit" value="Adicionar">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</form>