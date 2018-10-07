<?php
	require '../../config.php';
	require '../../classes/pacientes.class.php';
	$paciente = new Pacientes();

	if (!empty($_GET['id_paciente'])) {
		
		$id_paciente = $_GET['id_paciente'];
		$infoPaciente = $paciente->getInfoPaciente($id_paciente);	

	} else {
		header("Location: ../../pacientes.php");
		exit;
	}

	
?>

<h3>Editar Paciente</h3><br>
<form method="POST" action="pages/pacientes/editar_paciente_submit.php">
	<input type="hidden" name="id_paciente" value="<?php echo $infoPaciente['id_paciente'] ?>">
	<div class="form-row">
		<div class="form-group col-10">
		<label for="nome_paciente">Nome do paciente:</label>
		<input type="text" name="nome_paciente" class="form-control" value="<?php echo $infoPaciente['nome_paciente'] ?>" required>
	</div>
	<div class="form-group col-4">
		<label for="idade">Idade:</label>
		<input type="text" name="idade" class="form-control" value="<?php echo $infoPaciente['idade'] ?>" required>
	</div>
	</div>
	<div class="form-row">
		<div class="form-group col-6">
		<label for="num_carteira">Número da Carteira:</label>
		<input type="re" name="num_carteira" class="form-control" value="<?php echo $infoPaciente['num_carteira'] ?>" readonly>
	</div>
	<div class="form-group col-6">
		<label for="data_nasc">Data de Nascimento:</label>
		<input type="date" name="data_nasc" class="form-control" value="<?php echo $infoPaciente['data_nasc'] ?>" required>
	</div>
	</div>
	<input class="btn btn-primary" type="submit" value="Salvar">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</form>