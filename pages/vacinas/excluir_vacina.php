<?php 
	require '../../config.php';
	require '../../classes/vacinas.class.php';
	$vacina = new Vacinas();

	if (!empty($_GET['id_vacina'])) {
		
		$id_vacina = $_GET['id_vacina'];
		$infoVacina = $vacina->getInfoVacina($id_vacina);	

	} else {
		header("Location: ../../vacinas.php");
		exit;
	}	
?>

<form action="pages/vacinas/excluir_vacina_submit.php" method="POST">
		<input type="hidden" class="form-control" name="id_vacina" value="<?php echo $infoVacina['id_vacina']; ?>" readonly>
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