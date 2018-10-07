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

<form action="pages/pacientes/excluir_paciente_submit.php" method="POST">
		<input type="hidden" class="form-control" name="id_paciente" value="<?php echo $infoPaciente['id_paciente']; ?>" readonly>
		<div class="form-group">
			<div class="col-8">
				<h5>Pergunta</h5>
				<p>Confirma a exclusão deste registro?</p>
			</div>
		</div>
		<div class="form-group col-4">
			<input type="submit" class="btn btn-danger" value="Sim">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
		</div>			
</form>